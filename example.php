<?php

require_once('Renderable.php');
require_once('InputElement.php');
require_once('TextElement.php');
require_once('Form.php');

$form = new Form(['action' => 'submit.php', 'method' => 'post']);
$form->addElement(new TextElement('<h2>Contact Us</h2>'));
$form->addElement(new TextElement('<p>Please fill in this form and send us.</p>'));
$form->addElement(new InputElement('text', 'name', '', ['placeholder' => 'Your Name']));
$form->addElement(new InputElement('email', 'email', '', ['placeholder' => 'Your Email']));
$form->addElement(new InputElement('submit', 'submit', 'Send'));

echo $form->render();

?>