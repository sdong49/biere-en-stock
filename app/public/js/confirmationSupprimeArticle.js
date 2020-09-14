function supprimer() {
    let msg = "Voulez-vous supprimer ce produit?\n\nMerci de confirmer！";
    if (confirm(msg)==true){
        return true;
    }else{
        return false;
    }
}
