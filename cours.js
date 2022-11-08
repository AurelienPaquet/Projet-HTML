function portee3(){
    var choix = 0;
    var compteur = 1;
    for(let i = 0; i < 94; i++){
        compteur++;
        if( i % 31 == 0){
            compteur = 1;
        }
        switch(choix){
        case 1:
            document.createElement('p1') += compteur + '/janvier/2022<br>';
            break;
        case 2:
            document.createElement('p1') += compteur + '/janvier/2022<br>';

            break;
        case 3:
            document.removeChild('p2');
            document.createElement('p1') += compteur + '/mars/2022<br>';
            break;
        case 4:
            document.removeChild('p1');
            document.createElement('p2') += compteur + '/avril/2022<br>';
            break;
        }
    }

}
portee3();

