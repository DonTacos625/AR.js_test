<?php 
  $lat = 35.784223110391;
  $lng = 139.67287952337;
  $station_name = '西台駅';
  $spot_name = 'ピザハット';
  $row = array('id' => 1, 'name' => '関内 テラス 韓国料理 マル', 'open_time' => '月～日、祝日、祝前日: 11:30～翌0:00 （料理L.O. 23:30 ドリンクL.O. 翌0:00）', 'close_time' => 'なし', 'lunch_budget' => '1001～2000円', 'dinner_budget' => '2001～3000円');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>AR.js A-Frame Location-based</title>
        <script src="https://aframe.io/releases/1.2.0/aframe.min.js"></script>
        <script src="https://unpkg.com/aframe-look-at-component@0.8.0/dist/aframe-look-at-component.min.js"></script>
        <script src='https://raw.githack.com/AR-js-org/AR.js/master/three.js/build/ar-threex-location-only.js'></script>
        <script src='https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar.js'></script>

      
        <script src="https://unpkg.com/aframe-html-shader@0.2.0/dist/aframe-html-shader.min.js"></script>
        <script src="http://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
      
        <script src="js/html2canvas.min.js"></script>
        <style>
          * {
              margin: 0;
              padding: 0;
          }
          #loader {
              width: 100%;
              height: 100%;
              position: fixed;
              z-index: 100000000000;
              background-color: #333;
              color: #fff;
          }
          #loader>p {
              position: absolute;
              top: 50%;
              margin-top: -0.5em;
              width: 100%;
              text-align: center;
              font-size: 200%;
              font-weight: bold;
          }
          #loader.hidden {
              display: none;
          }
          .target {
              position: absolute;
              width: 320px;
              height: 200px;
              font-size: 100%;
              background-color: #FFF;
              display: hidden;
              /*z-index: 1;*/
          }
          .target>img {
              float: left;
              display: block;
              width: 32%;
              padding: 4% 0 4% 4%;
          }
          .target>div {
              margin-left: 36%;
              width: 52%;
              padding: 4%;
          }
          .target>.detail {
              padding: 3% 0;
              text-align: center;
              width: 92%;
              color: #fff;
              background-color: rgba(1, 1, 1, 0.6);
              margin: 4%;
          }
          #test {
          height: 200px;
          width: 200px;
          z-index: -50;
          background-color: #FFF;
          }

          
        .target table {
              padding: 3% 0;
              text-align: center;
              width: 92%;
              color: #fff;
              background-color: rgba(1, 1, 1, 0.6);
              margin: 4%;
        }

        .target #imgbox{
            float: left;
            display: flex;
            width: 20vw;
            height: 15vw;
            margin-bottom: 15px;
            justify-content: center;
            align-items: center;
        }

        .target #imgbox img{
              float: left;
              display: block;
              width: 32%;
              padding: 4% 0 4% 4%;
        }

        .target table th {
            text-align: left;
            white-space: nowrap;
            background: #EEEEEE;
            width: 15vw;
        }

        .target table td {
            background: #EEEEEE;
            padding: 3px;
        }

        .target table td ul {
            margin: 0px;
        }

        .target table td ul li {
            display: inline-block;
        }

        .target table td pre {
            white-space: pre-wrap;
        }
          
        </style>

    </head>
    <script>
        AFRAME.registerComponent('click', {
            init: function() {
                let name = this.el.getAttribute('data-text');
                this.el.addEventListener('click', () => {
                    alert(name)
                });
        }});
      
    </script>
    <body>
      
      <div id="target1" class="target">
      <img src="img/catalina.jpg" alt="A-Frame">
      <div class="cf"><h3>A-Frame</h3>
      <p>A-Frameは簡単にWeb VRが実現できるフレームワークです。</p></div>
      <p class="detail">320×640</p>
      </div>
      <div id="test">
        <p>test</p>
      </div>

      <div class="target" id="infobox1" value=<?php echo $row["id"]; ?>>
        <table>
            <tr>
                <th><div id="imgbox"><img src=<?php echo "img/". $row["id"] .".jpg" ?> alt=""></div></th>
                <td></td>
            </tr>
            <tr>
                <th>店舗名</th>
                <td><?php echo $row["name"]; ?></td>
            </tr>
            <tr>
                <th>営業時間</th>
                <td><?php echo nl2br($row["open_time"]); ?></td>
            </tr>
            <tr>
                <th>定休日</th>
                <td><?php echo nl2br($row["close_time"]); ?></td>
            </tr>
            <tr>
                <th>予算</th>
                <td>昼：<?php if($row["lunch_budget"]) {echo $row["lunch_budget"];} else {echo "不明";} ?>　　夜：<?php echo $row["dinner_budget"]; ?></td>
            </tr>
        </table>
      </div>
      
            <a-scene vr-mode-ui='enabled: false' arjs='sourceType: webcam; videoTexture: true; debugUIEnabled: false' renderer='antialias: true; alpha: true' cursor='rayOrigin: mouse'>
            <a-camera gps-new-camera='gpsMinDistance: 5'></a-camera>
            
            <a-entity 
                      click
                      data-text=<?php echo $station_name ?>
                      look-at="[gps-new-camera]" 
                      gps-new-entity-place="latitude: 35.786166447091; longitude: 139.67492026079;" 
                      scale="10 10 10">
            <a-plane 
                       position="0 0 0"  
                       width="8" 
                       height="5"
                       material="shader:html;target: #target1;"
                       look-at="[gps-new-camera]"
                       >
            </a-plane></a-entity>


           <a-entity 
                      click
                      data-text=<?php echo $spot_name ?>
                      look-at="[gps-new-camera]" 
                      gps-new-entity-place="latitude: 35.78211775; longitude: 139.6734502;"
                      scale="10 10 10">
            <a-plane 
                       position="0 0 0"  
                       width="8" 
                       height="5"
                       material="shader:html;target: #infobox1;"
                       look-at="[gps-new-camera]"
                       >
            </a-plane></a-entity>
              

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
                      scale="100 100 100">
            　<a-image
                        src="https://cdn.glitch.global/3acb31b7-c45b-47f0-8eb6-beb5723e638a/uec_mark.png?v=1687853300605"
                        height="5"
                        width="4.5"
                        position="-4.5 -2 -4"
                        rotation="0 0 0"
                        >
              </a-image></a-entity>
              
              <a-entity 
                      text="value: Hello World;"
                      look-at="[gps-new-camera]" 
                      gps-new-entity-place="latitude: 35.651820534474; longitude: 139.54461236426;" 
                      scale="100 100 100"
                      >
            　<a-image
                        src="https://cdn.glitch.global/3acb31b7-c45b-47f0-8eb6-beb5723e638a/uec_mark.png?v=1687853300605"
                        height="5"
                        width="4.5"
                        position="-4.5 -2 -4"
                        rotation="0 0 0"
                        >
              </a-image></a-entity>
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
