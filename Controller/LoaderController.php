<?php
namespace Striide\WidgetBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoaderController extends Controller
{
  private function getLoaderParams($id, $message, $img, $hidden)
  {
    $params = array();
    $params['loader_id'] = $id;

    if (!is_null($message))
    {
      $params['loader_message'] = $message;
    }
    else
    {
      $params['loader_message'] = "Loading";
    }

    if (!is_null($img))
    {
      $params['loader_img'] = $img;
    }

    if (!is_null($hidden) && $hidden == true)
    {
      $params['hidden'] = true;
    }
    return $params;
  }

  public function inlineAction($id, $message = null, $img = null, $hidden = null)
  {
    return $this->render('StriideWidgetBundle:Loader:inline.html.twig', $this->getLoaderParams($id, $message, $img, $hidden));
  }
  
  public function blockAction($id, $message = null, $img = null, $hidden = null)
  {
    return $this->render('StriideWidgetBundle:Loader:block.html.twig', $this->getLoaderParams($id, $message, $img, $hidden));
  }
}
