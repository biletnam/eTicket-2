<?php

class ReservationCtrl extends BaseCtrl
{
    public function index()
    {
      /*if (isset($_POST['textfield']) && isset($_POST['description'] && isset($_POST['price']) {

        $textbody = $_POST['textfield'] + $_POST['description'] + $_POST['price'];
        $mandrill = new Mandrill('34Yv8CSaxAEYPj0ouWDBng');

        $message = new stdClass();
        $message->html = $textbody;
        $message->text = "text body";
        $message->subject = "Votre reservation";
        $message->from_email = "iim@iim2232323234.fr";
        $message->from_name  = "From Name";
        $message->to = array(array("email" => "fabmontillot@gmail.com"));
        $message->track_opens = true;

        $response = $mandrill->messages->send($message);

      }*/


      return $this->render('reservation.html.twig', [

      ]);
    }
}
