<?php
require_once 'db.php';
$query_dorm = "SELECT fullname, photo FROM OSDS_SERVICE_dormitorys";
$qresult_dorm = mysqli_query($conn, $query_dorm) or die(throwError('query failed'));
$qdata_dorm = null;
$data_dorm = [];
while($qdata_dorm = mysqli_fetch_assoc($qresult_dorm))
    $data_dorm[] = $qdata_dorm;

$query_dorm_tag = "SELECT * FROM OSDS_SERVICE_photos";
$qresult_dorm_tag = mysqli_query($conn, $query_dorm_tag) or die(throwError('query failed'));
$qdata_dorm_tag = null;
$data_dorm_tag = [];
while($qdata_dorm_tag = mysqli_fetch_assoc($qresult_dorm_tag))
    $data_dorm_tag[] = $qdata_dorm_tag;
?>

<script>
var dormInfo = <?=json_encode( $data_dorm_tag );?>;

const createElement = (tag, obj) => {
  let el = document.createElement(tag);
  if(typeof obj=="object"){
    let list = Object.keys(obj);
    for(var i=0;i<list.length;i++){
      let key = list[i];
      if(typeof obj[key]!='object'){
        el[key] = obj[key];
      }else
        for(let k of Object.keys(obj[key])){
          el[key][k] = obj[key][k];
        }
    }
  }
  return el;
}

function changeSublist(my){
  let list = dormInfo.filter(v=>my.value==v.id);
  if(list.length==0){
    return document.querySelector("#phototag").innerHTML = "";
  }
  document.querySelector("#phototag").innerHTML = "";
  document.querySelector("#phototag").onchange = showPicture;//selectPhoto;
  document.querySelector("#newtag").onblur = checkName;
  document.querySelector("#phototag").appendChild(createElement("option", {
    innerText:`-------`
  }));
  document.querySelector("#phototag").appendChild(createElement("option", {
    value:"-1",
    innerText:`編輯新標籤`
  }));
  for(let obj of list){
    document.querySelector("#phototag").appendChild(createElement("option", {
      value:obj.uuid,
      innerText:`${obj.note}`
    }));
  }
}

function selectPhoto( value ){
    let uuid=parseInt( value || this.value);
    if(uuid===-1){
        document.querySelector("#phototag").style.display="none";
        document.querySelector("#newtag").style.display="inline";
        document.querySelector("#newtag").focus();
        document.getElementById("insert").hidden=false;
    }
}

function checkName(){
    if(this.value===""){
        document.querySelector("#phototag")[0].selected=true;
        document.querySelector("#phototag").style.display="inline";
        document.querySelector("#newtag").style.display="none";
        document.getElementById("insert").hidden=true;
    }
}

function showPicture(){
  var selectBox = document.getElementById("phototag");
  var selectedValue = selectBox.options[selectBox.selectedIndex].value;
  selectPhoto( selectedValue );
  let picture_obj = dormInfo.filter(v=>selectedValue==v.uuid);
  let picture_src = picture_obj[0].src;
  document.getElementById("show").src=`${picture_src}`;
  document.getElementById("update").hidden=false;
  document.getElementById("remove").hidden=false;
}

function update( pid ){
  pid = pid || document.querySelector("#phototag").value;
  // console.log( this )
  if( pid == undefined ){
    alert("Didn't select any photo");
    return;
  }
  location.href = `dm-photo-editor.php?pid=${parseInt( pid )}`;
}

function remove( pid ){
  pid = pid || document.querySelector("#phototag").value;
  // console.log( this )
  if( pid == undefined ){
    alert("Didn't select any photo");
    return;
  }console.log(pid);
  location.href = `delete.php?pid=${parseInt( pid )}`
}

function insert( note, id ){
  note = note || document.querySelector("#newtag").value;
  id = document.querySelector("#dorm").value;
  location.href = `insert.php?note=${note}&id=${parseInt(id)}`;
}

</script>

<form action="dorm-photo-preview.php">
    <!-- <input type="file" id="file-uploader" data-target="file-uploader" accept="image/*"/> -->
    <select name="dorm" id="dorm" onchange="changeSublist(this)">  
    <option value="" selected>------</option>  
    <?php for($i=0;$i<count($data_dorm);$i++): ?>
        <option value="<?=$data_dorm[$i]['photo']?>"><?=$data_dorm[$i]['fullname']?></option>
    <?php endfor; ?>
    </select>
    <select name="phototag" id="phototag"></select>
    <input style="display:none;" name="tag" id="newtag">
</form>
<button id="insert" onclick=insert() hidden>新增</button>
<img id="show" scr="" height=480>
<br>
<button id="update"onclick=update() hidden>更新</button>
<button id="remove"onclick=remove() hidden>刪除</button>

