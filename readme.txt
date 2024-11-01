=== Softmogul Booking Engine ===
Contributors: softmogul
Tags: hotel, hotels, booking engine, internet booking engine, online booking engine, hotel bookings, hotel reservations, hotel reservation system, online hotel reservation, online hotel booking
License: GPLv3

Accept online bookings through your hotel wordpress website automatically with Softmogul Booking Engine.

== Description ==
# Softmogul Booking Engine

Softmogul Booking Engine is a plugin that enables the user to easily integrate Softmogul (https://softmogul.com) Booking Engine into their website. Softmogul is an Hotel Management System that allows hotels to manage their property on the cloud. Booking Engine is the part of Softmogul that allows hotels to recieve hotel bookings from their website. The plugin does the following:

# What it does
  - Allows the user to configure their Softmogul Token so they can authenticate with Softmogul
  
  - Include the following script in their website (https://softmogul.com/booking-api.js) which contains the neccessary code to show the reservation modal. This script contains the code neccessary to build/display and manage the New Reservation Modal. This modal accepts input from the site visitor such as Checkin/Checkout, Room Type, Rate Plan, Name, Email etc. and submits the information entered to Softmogul.com that will be responsible for registering this room booking and sending the confirmation email back to the visitor.
  
  - Replace every occurance of http://receptionpms.com with the following code \"window.dispatchEvent(new Event(\'reservation-app-show\')\" so that whenever the users click the links, instead of opening http://receptionpms.com (which is a domain owned by us), it opens the reservation modal.


# Usage

To configure Softmogul Booking Engine, the site owner, after installing the plugin, should go to Softmogul Booking Engine Settings and paste their Token (which they can get from their Softmogul Administration Panel).

Afterwards, whenever they like to show the reservation modal, they can add a link ( element) anywhere in their site (Menu, Image, Button, Text) with the following href=\"http://receptionpms.com\" and that\'s it. Every visitor that clicks on the links will see the reservation modal.

== Installation ==
To configure Softmogul Booking Engine, the site owner, after installing the plugin, should go to Softmogul Booking Engine Settings and paste their Token (which they can get from their Softmogul Administration Panel).

Afterwards, whenever they like to show the reservation modal, they can add a link ( element) anywhere in their site (Menu, Image, Button, Text) with the following href=\"http://receptionpms.com\" and that\'s it. Every visitor that clicks on the links will see the reservation modal.
