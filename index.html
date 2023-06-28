<!doctype html>
<!DOCTYPE html>
<html>
    <head>
        <title>AR.js A-Frame Location-based</title>
        <script src="https://aframe.io/releases/1.4.1/aframe.min.js"></script>
        <script src="https://unpkg.com/aframe-look-at-component@0.8.0/dist/aframe-look-at-component.min.js"></script>
        <script src='https://raw.githack.com/AR-js-org/AR.js/master/three.js/build/ar-threex-location-only.js'></script>
        <script src='https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar.js'></script>

        <script src="./js/aframe-html-shader.min.js"></script>
        <script src="./js/html2canvas.min.js"></script>
    </head>
    <script>
        AFRAME.registerComponent('click', {
            init: function() {
                let name = this.el.getAttribute('data-text');
                this.el.addEventListener('click', () => {
                    alert(name)
                });
        }});
      
        AFRAME.registerComponent('clicktakashima', {
            init: function() {
                this.el.addEventListener('click', () => {
                    alert('高島平駅です！')
                });
        }});
        AFRAME.registerComponent('clickhandler', {
            init: function() {
                this.el.addEventListener('click', () => {
                    alert('調布駅です！')
                });
        }});
    </script>
    <body>
            <a-scene vr-mode-ui='enabled: false' arjs='sourceType: webcam; videoTexture: true; debugUIEnabled: false' renderer='antialias: true; alpha: true' cursor='rayOrigin: mouse'>
            <a-camera gps-new-camera='gpsMinDistance: 5'></a-camera>
            <a-entity click data-text="西台駅" id='nishidai' material='color: blue' geometry='primitive: box' gps-new-entity-place="latitude: 35.787063624636; longitude: 139.67287952337;" scale="100 100 100"></a-entity>

            <a-entity click data-text="蓮根駅" look-at="[gps-new-camera]" mb-text gps-new-entity-place="latitude: 35.784223110391; longitude: 139.67906111159;" scale="40 40 40"></a-entity>
            <a-entity click data-text="高島平駅" look-at="[gps-new-camera]" mb-text gps-new-entity-place="latitude: 35.7889291031; longitude: 139.6612484385;" scale="40 40 40"></a-entity>
            <a-entity 
                      click
                      data-text="すき屋 蓮根駅前店"
                      look-at="[gps-new-camera]"
                      mb-text
                      gps-new-entity-place="latitude: 35.7853948; longitude: 139.6763982;"
                      scale="40 40 40"
                      ><a-image
                        src="https://cdn.glitch.global/3acb31b7-c45b-47f0-8eb6-beb5723e638a/uec_mark.png?v=1687853300605"
                        height="2"
                        look-at="[gps-new-camera]"
                        width="2"
                        position="0 -2 0"
                        >
              </a-image></a-entity>
            
            <a-entity click data-text="深大寺" material='color: red' geometry='primitive: sphere' gps-new-entity-place="latitude: 35.6686838; longitude: 139.5418261;" scale="100 100 100"></a-entity>
            <a-entity click data-text="電通大" material='color: green' geometry='primitive: sphere' gps-new-entity-place="latitude: 35.6577007; longitude: 139.5465039;" scale="100 100 100"></a-entity>
            <a-entity 
                      click 
                      data-text="調布駅" 
                      look-at="[gps-new-camera]" 
                      material='color: red' 
                      mb-text gps-new-entity-place="latitude: 35.651820534474; longitude: 139.54461236426;" 
                      scale="100 100 100"></a-entity>
        </a-scene>
    </body>
</html>

<script>
    
    //現在座標に対して相対的な場所に赤いボックスを表示
  /*
    window.onload = () => {
    let testEntityAdded = false;

    const el = document.querySelector("[gps-new-camera]");

    el.addEventListener("gps-camera-update-position", e => {
        if(!testEntityAdded) {
            alert(`Got first GPS position: lon ${e.detail.position.longitude} lat ${e.detail.position.latitude}`);
            // Add a box to the north of the initial GPS position
            const entity = document.createElement("a-box");
            entity.setAttribute("scale", {
                x: 20, 
                y: 20,
                z: 20
            });
            entity.setAttribute('material', { color: 'red' } );
            entity.setAttribute('gps-new-entity-place', {
                latitude: e.detail.position.latitude + 0.001,
                longitude: e.detail.position.longitude
            });
            document.querySelector("a-scene").appendChild(entity);
        }
        testEntityAdded = true;
    });
};
*/


//mb-textを日本語化
function aframeMutlByte(){
    document.querySelectorAll('[mb-text]:empty').forEach(mb_text=>{
        console.log(mb_text.dataset.text)
        const text  =mb_text.dataset.text
        const text_cnt = text.length
        const width = text_cnt*1.4
        const height= 1.6
        let cvs = document.createElement('canvas')
        let ctx = cvs.getContext('2d')
        cvs.width = width*100
        cvs.height = height*100
        cvs.fillStyle = "rgb(255, 255, 255)"
      
        ctx.fillStyle = "rgb(255, 255, 255)"
        ctx.font = '100pt Arial'
        ctx.fillText(text,0,125)

        const base64 = cvs.toDataURL("image/png")
        mb_text.innerHTML=`<a-image scale="${(width)/5} ${height/5} 1" src="${base64}"></a-image>`
    })
}
    aframeMutlByte()
//add text label
/*
window.onload = () => {
    let downloaded = false;

    const el = document.querySelector("[gps-new-camera]");

    el.addEventListener("gps-camera-update-position", async(e) => {
        if(!downloaded) {
            const west = e.detail.position.longitude - 0.05,
                  east = e.detail.position.longitude + 0.05,
                  south = e.detail.position.latitude - 0.05;
                  north = e.detail.position.latitude + 0.05;
            console.log(`${west} ${south} ${east} ${north}`);
            const response = await fetch(`https://hikar.org/webapp/map?bbox=${west},${south},${east},${north}&layers=poi&outProj=4326`);
            const pois = await response.json();
            pois.features.forEach ( feature => {
                const compoundEntity = document.createElement("a-entity");
                compoundEntity.setAttribute('gps-new-entity-place', {
                    latitude: feature.geometry.coordinates[1],
                    longitude: feature.geometry.coordinates[0]
                });
                const box = document.createElement("a-box");
                box.setAttribute("scale", {
                    x: 20,
                    y: 20,
                    z: 20
                });
                box.setAttribute('material', { color: 'red' } );
                box.setAttribute("position", {
                    x : 0,
                    y : 20,
                    z: 0
                } );
                const text = document.createElement("a-text");
                const textScale = 100;
                text.setAttribute("look-at", "[gps-new-camera]");
                text.setAttribute("scale", {
                    x: textScale,
                    y: textScale,
                    z: textScale
                });
                text.setAttribute("value", feature.properties.name);
                text.setAttribute("align", "center");
                compoundEntity.appendChild(box);
                compoundEntity.appendChild(text);
                document.querySelector("a-scene").appendChild(compoundEntity);
            });
        }
        downloaded = true;
    });
};
*/
</script>
