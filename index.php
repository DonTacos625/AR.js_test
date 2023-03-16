<!doctype html>
<?php
    $place = 'latitude: 35.784223110391; longitude: 139.67906111159;';
    echo $place;
?>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script>
        <script src="https://unpkg.com/aframe-look-at-component@0.8.0/dist/aframe-look-at-component.min.js"></script>
        <script src="https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar-nft.js"></script>
    </head>

    <body style="margin: 0; overflow: hidden;">
        <a-scene
            embedded
            loading-screen="enabled: false;"
            arjs="sourceType: webcam; debugUIEnabled: false;"
        >
                <a-image
                    src="assets/asset.jpeg"
                    look-at="[gps-camera]"
                    scale="1 1 1"
                    gps-entity-place=<?php $place ?>
                ></a-image>

            <a-camera gps-camera rotation-reader></a-camera>
        </a-scene>
    </body>
</html>
