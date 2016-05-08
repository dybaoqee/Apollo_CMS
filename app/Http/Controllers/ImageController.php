<?php
/**
 * Created by IntelliJ IDEA.
 * User: eric.qi
 * Date: 5/7/16
 * Time: 6:41 PM
 */

namespace GrahamCampbell\BootstrapCMS\Http\Controllers;

use GrahamCampbell\Binput\Facades\Binput;
use GrahamCampbell\BootstrapCMS\Facades\ImageRepository;
use GrahamCampbell\BootstrapCMS\Facades\PostRepository;
use GrahamCampbell\Throttle\Throttlers\ThrottlerInterface;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\ConflictHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * This is the comment controller class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class ImageController extends AbstractController
{
    /**
     * The throttler instance.
     *
     * @var \GrahamCampbell\Throttle\Throttlers\ThrottlerInterface
     */
    protected $throttler;

    /**
     * Create a new instance.
     *
     * @param \GrahamCampbell\Throttle\Throttlers\ThrottlerInterface $throttler
     *
     * @return void
     */
    public function __construct(ThrottlerInterface $throttler)
    {
        $this->throttler = $throttler;

        $this->setPermissions([
            'store'   => 'user',
            'update'  => 'mod',
            'destroy' => 'mod',
        ]);

        //$this->beforeFilter('throttle.comment', ['only' => ['store']]);

        parent::__construct();
    }

    /**
     * Display a listing of the comments.
     *
     * @param int $postId
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index($postId)
    {
        echo 'asdf';
        die();
        $post = PostRepository::find($postId, ['id']);
        if (!$post) {
            Session::flash('error', 'The post you were viewing has been deleted.');

            return Response::json([
                'success' => false,
                'code'    => 404,
                'msg'     => 'The post you were viewing has been deleted.',
                'url'     => URL::route('blog.posts.index'),
            ], 404);
        }

        $images = $post->images()->get(['id', 'version']);

        $data = [];

        foreach ($images as $image) {
            $data[] = ['image_id' => $image->id, 'image_path' => $image->path];
        }

        return Response::json(array_reverse($data));
    }

}