
function donate(){
    var copytxt = document.getElementById("donate");
    copytxt.select();
    copytxt.setSelectionRange(0, 999999);
    document.execCommand("copy");
    alert("Copied: " + copytxt.value);
}