<?php
require_once '../env.php'; 

class LikeController extends Controller{
    public function like(){
        
        $like = new Like();

        if ($value = $like->has($_POST['tweet_id'], $_POST['user_id'])) {
            $like->delete($value['id']);
        } else {
            $like->save($_POST);
        }

        Route::redirect('../tweet/index');
    }
}
$likeController = new LikeController();
$likeController->like();
?>