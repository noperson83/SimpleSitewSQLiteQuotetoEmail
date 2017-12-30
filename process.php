<?php
session_start();
include('./includes/LGContact.php');
include('./includes/LGOrder.php');
include('./includes/LGDBInsert.php');

$contact = new LGContact($_POST['contact']);
$order = new LGOrder($_POST['order']);
$insert = new LGDBInsert;
$lastContact = $insert->insertContact($contact);
$insert->insertOrder($order, $lastContact);

//Order
$_SESSION['order_number'] = $order->order;
$_SESSION['order_total'] = $order->order_total;
$_SESSION['unit_price'] = $order->unit_price;
$_SESSION['shipping_price'] = $order->shipping_price;
$_SESSION['quantity'] = $order->quantity;
$_SESSION['type'] = $order->type;
$_SESSION['size'] = $order->size;
$_SESSION['runtime_one'] = $order->runtime_one;
$_SESSION['runtime_two'] = $order->runtime_two;
$_SESSION['labels'] = $order->labels;
$_SESSION['packaging'] = $order->packaging;
$_SESSION['rush'] = $order->rush;
$_SESSION['artist'] = $order->artist;
$_SESSION['title'] = $order->title;
$_SESSION['genre'] = $order->genre;
$_SESSION['url'] = $order->url;
$_SESSION['notes'] = $order->notes;

//Contact
$_SESSION['name'] = $contact->name;
$_SESSION['email'] = $contact->email;
$_SESSION['phone'] = $contact->phone;
$_SESSION['instagram'] = $contact->instagram;
$_SESSION['twitter'] = $contact->twitter;
$_SESSION['address1'] = $contact->address1;
$_SESSION['address2'] = $contact->address2;
$_SESSION['city'] = $contact->city;
$_SESSION['state'] = $contact->state;
$_SESSION['zip'] = $contact->zip;
$_SESSION['country'] = $contact->country;

header("Location: checkout.php");
die();