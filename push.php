<?php
// require
require_once('./vendor/autoload.php');
// config
$beamsClient = new \Pusher\PushNotifications\PushNotifications(array(
    "instanceId" => "YOUR_INSTANCEID",
    "secretKey" => "YOUR_KEY",
));
// start
$publishResponse = $beamsClient->publishToInterests(
    array("hello", "donuts"),
    array(
        "fcm" => array(
            "notification" => array(
                "title" => "Hi!",
                "body" => "This is my first Push Notification!"
            )
        ),
        "apns" => array("aps" => array(
            "alert" => array(
                "title" => "Hi!",
                "body" => "This is my first Push Notification!"
            )
        )),
        "web" => array(
            "notification" => array(
                "title" => "Hi!",
                "body" => "This is my first Push Notification!",
                "deep_link" => "https://www.pusher.com",
                "icon" => "http://localhost:3000/burger.jpg",
            )
        )
    )
);
