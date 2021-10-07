function vermas(vm){
    var id="v"+vm.id;
    document.getElementById(id).style.display="contents";   
    document.getElementById(vm.id).style.display="none"; 
    return false;
}
function vermenos(vm){
    var id="vm"+vm.id;
    var bot="m"+vm.id;
    document.getElementById(id).style.display="none";
    document.getElementById(bot).style.display="inline";
}