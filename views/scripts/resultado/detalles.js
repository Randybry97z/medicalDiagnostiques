//************************************IZQUIERDA******************************************* */

//Espesor
let triceps_valor_izq = document.getElementById('triceps_valor_izq');
let triceps_espesor_izq = document.getElementById('triceps_espesor_izq');

let cuadriceps_valor_izq = document.getElementById('cuadriceps_valor_izq');
let cuadriceps_espesor_izq = document.getElementById('cuadriceps_espesor_izq');

let patelar_prox_valor_izq = document.getElementById('patelar_prox_valor_izq');
let patelar_prox_espesor_izq = document.getElementById('patelar_prox_espesor_izq');

let patelar_dist_valor_izq = document.getElementById('patelar_dist_valor_izq');
let patelar_dist_espesor_izq = document.getElementById('patelar_dist_espesor_izq');

let aquileo_valor_izq = document.getElementById('aquileo_valor_izq');
let aquileo_espesor_izq = document.getElementById('aquileo_espesor_izq');

let fascia_plantar_valor_izq = document.getElementById('fascia_plantar_valor_izq');
let fascia_plantar_espesor_izq = document.getElementById('fascia_plantar_espesor_izq');

let total_espesor_izq = document.getElementById('total_espesor_izq');

//Estructura
let triceps_estructura_izq = document.getElementById('triceps_estructura_izq');
let cuadriceps_estructura_izq = document.getElementById('cuadriceps_estructura_izq');
let patelar_prox_estructura_izq = document.getElementById('patelar_prox_estructura_izq'); 
let patelar_dist_estructura_izq = document.getElementById('patelar_dist_estructura_izq');
let aquileo_estructura_izq = document.getElementById('aquileo_estructura_izq');
let fascia_plantar_estructura_izq = document.getElementById('fascia_plantar_estructura_izq');

let total_estructura_izq = document.getElementById('total_estructura_izq');


//Bursitis 
let patelar_dist_bursitis_izq = document.getElementById('patelar_dist_bursitis_izq');
let aquileo_bursitis_izq = document.getElementById('aquileo_bursitis_izq');

let total_bursitis_izq = document.getElementById('total_bursitis_izq');

//Erosion
let triceps_erosion_izq = document.getElementById('triceps_erosion_izq');
let cuadriceps_erosion_izq = document.getElementById('cuadriceps_erosion_izq');
let patelar_prox_erosion_izq = document.getElementById('patelar_prox_erosion_izq'); 
let patelar_dist_erosion_izq = document.getElementById('patelar_dist_erosion_izq');
let aquileo_erosion_izq = document.getElementById('aquileo_erosion_izq');
let fascia_plantar_erosion_izq = document.getElementById('fascia_plantar_erosion_izq');

let total_erosion_izq = document.getElementById('total_erosion_izq');

//Calcificaciones
let triceps_calc_izq = document.getElementById('triceps_calc_izq');
let cuadriceps_calc_izq = document.getElementById('cuadriceps_calc_izq');
let patelar_prox_calc_izq = document.getElementById('patelar_prox_calc_izq'); 
let patelar_dist_calc_izq = document.getElementById('patelar_dist_calc_izq');
let aquileo_calc_izq = document.getElementById('aquileo_calc_izq');
let fascia_plantar_calc_izq = document.getElementById('fascia_plantar_calc_izq');

let total_calc_izq = document.getElementById('total_calc_izq');

//PWD
let triceps_pwd_izq = document.getElementById('triceps_pwd_izq');
let cuadriceps_pwd_izq = document.getElementById('cuadriceps_pwd_izq');
let patelar_prox_pwd_izq = document.getElementById('patelar_prox_pwd_izq'); 
let patelar_dist_pwd_izq = document.getElementById('patelar_dist_pwd_izq');
let aquileo_pwd_izq = document.getElementById('aquileo_pwd_izq');
let fascia_plantar_pwd_izq = document.getElementById('fascia_plantar_pwd_izq');

let total_pwd_izq = document.getElementById('total_pwd_izq');

//Total IZQ
let total_izq = document.getElementById('total_izq');

// Listeners Espesor
triceps_valor_izq.addEventListener("keyup", valorEspesorIzq);
triceps_valor_izq.addEventListener("mouseup", valorEspesorIzq);

cuadriceps_valor_izq.addEventListener("keyup", valorEspesorIzq);
cuadriceps_valor_izq.addEventListener("mouseup", valorEspesorIzq);

patelar_prox_valor_izq.addEventListener("keyup", valorEspesorIzq);
patelar_prox_valor_izq.addEventListener("mouseup", valorEspesorIzq);

patelar_dist_valor_izq.addEventListener("keyup", valorEspesorIzq);
patelar_dist_valor_izq.addEventListener("mouseup", valorEspesorIzq);

aquileo_valor_izq.addEventListener("keyup", valorEspesorIzq);
aquileo_valor_izq.addEventListener("mouseup", valorEspesorIzq);

fascia_plantar_valor_izq.addEventListener("keyup", valorEspesorIzq);
fascia_plantar_valor_izq.addEventListener("mouseup", valorEspesorIzq);


triceps_valor_izq.addEventListener("keyup", totalIzq);
triceps_valor_izq.addEventListener("mouseup", totalIzq);

cuadriceps_valor_izq.addEventListener("keyup", totalIzq);
cuadriceps_valor_izq.addEventListener("mouseup", totalIzq);

patelar_prox_valor_izq.addEventListener("keyup", totalIzq);
patelar_prox_valor_izq.addEventListener("mouseup", totalIzq);

patelar_dist_valor_izq.addEventListener("keyup", totalIzq);
patelar_dist_valor_izq.addEventListener("mouseup", totalIzq);

aquileo_valor_izq.addEventListener("keyup", totalIzq);
aquileo_valor_izq.addEventListener("mouseup", totalIzq);

fascia_plantar_valor_izq.addEventListener("keyup", totalIzq);
fascia_plantar_valor_izq.addEventListener("mouseup", totalIzq);

//Listeners Estructura
triceps_estructura_izq.addEventListener("change", valorEstructuraIzq);
cuadriceps_estructura_izq.addEventListener("change", valorEstructuraIzq);
patelar_prox_estructura_izq.addEventListener("change", valorEstructuraIzq);
patelar_dist_estructura_izq.addEventListener("change", valorEstructuraIzq);
aquileo_estructura_izq.addEventListener("change", valorEstructuraIzq);
fascia_plantar_estructura_izq.addEventListener("change", valorEstructuraIzq);

triceps_estructura_izq.addEventListener("change", totalIzq);
cuadriceps_estructura_izq.addEventListener("change", totalIzq);
patelar_prox_estructura_izq.addEventListener("change", totalIzq);
patelar_dist_estructura_izq.addEventListener("change", totalIzq);
aquileo_estructura_izq.addEventListener("change", totalIzq);
fascia_plantar_estructura_izq.addEventListener("change", totalIzq);

//Listeners Bursitis
patelar_dist_bursitis_izq.addEventListener("change", valorBursitisIzq);
aquileo_bursitis_izq.addEventListener("change", valorBursitisIzq);

patelar_dist_bursitis_izq.addEventListener("change", totalIzq);
aquileo_bursitis_izq.addEventListener("change", totalIzq);

//Listeners Erosion
triceps_erosion_izq.addEventListener("change", valorErosionIzq);
cuadriceps_erosion_izq.addEventListener("change", valorErosionIzq);
patelar_prox_erosion_izq.addEventListener("change", valorErosionIzq);
patelar_dist_erosion_izq.addEventListener("change", valorErosionIzq);
aquileo_erosion_izq.addEventListener("change", valorErosionIzq);
fascia_plantar_erosion_izq.addEventListener("change", valorErosionIzq);

triceps_erosion_izq.addEventListener("change", totalIzq);
cuadriceps_erosion_izq.addEventListener("change", totalIzq);
patelar_prox_erosion_izq.addEventListener("change", totalIzq);
patelar_dist_erosion_izq.addEventListener("change", totalIzq);
aquileo_erosion_izq.addEventListener("change", totalIzq);
fascia_plantar_erosion_izq.addEventListener("change", totalIzq);

//Listeners Calcificaciones
triceps_calc_izq.addEventListener("change", valorCalcIzq);
cuadriceps_calc_izq.addEventListener("change", valorCalcIzq);
patelar_prox_calc_izq.addEventListener("change", valorCalcIzq);
patelar_dist_calc_izq.addEventListener("change", valorCalcIzq);
aquileo_calc_izq.addEventListener("change", valorCalcIzq);
fascia_plantar_calc_izq.addEventListener("change", valorCalcIzq);

triceps_calc_izq.addEventListener("change", totalIzq);
cuadriceps_calc_izq.addEventListener("change", totalIzq);
patelar_prox_calc_izq.addEventListener("change", totalIzq);
patelar_dist_calc_izq.addEventListener("change", totalIzq);
aquileo_calc_izq.addEventListener("change", totalIzq);
fascia_plantar_calc_izq.addEventListener("change", totalIzq);

//Listeners PWD
triceps_pwd_izq.addEventListener("change", valorPwdIzq);
cuadriceps_pwd_izq.addEventListener("change", valorPwdIzq);
patelar_prox_pwd_izq.addEventListener("change", valorPwdIzq);
patelar_dist_pwd_izq.addEventListener("change", valorPwdIzq);
aquileo_pwd_izq.addEventListener("change", valorPwdIzq);
fascia_plantar_pwd_izq.addEventListener("change", valorPwdIzq);

triceps_pwd_izq.addEventListener("change", totalIzq);
cuadriceps_pwd_izq.addEventListener("change", totalIzq);
patelar_prox_pwd_izq.addEventListener("change", totalIzq);
patelar_dist_pwd_izq.addEventListener("change", totalIzq);
aquileo_pwd_izq.addEventListener("change", totalIzq);
fascia_plantar_pwd_izq.addEventListener("change", totalIzq);

// Función valorEspesor.

function valorEspesorIzq(){
    let valor = triceps_valor_izq.value > 4.3;
    let espesor = valor ? 1 : 0;
    triceps_espesor_izq.value = espesor;

    let valor1 = cuadriceps_valor_izq.value > 6.1;
    let espesor1 = valor1 ? 1 : 0;
    cuadriceps_espesor_izq.value = espesor1;

    let valor2 = patelar_prox_valor_izq.value > 4.0;
    let espesor2 = valor2 ? 1 : 0;
    patelar_prox_espesor_izq.value = espesor2;

    let valor3 = patelar_dist_valor_izq.value > 4.0;
    let espesor3 = valor3 ? 1 : 0;
    patelar_dist_espesor_izq.value = espesor3;


    let valor4 = aquileo_valor_izq.value > 5.29;
    let espesor4 = valor4 ? 1 : 0;
    aquileo_espesor_izq.value = espesor4;

    let valor5 = fascia_plantar_valor_izq.value > 4.4;
    let espesor5 = valor5 ? 1 : 0;
    fascia_plantar_espesor_izq.value = espesor5;

    return (total_espesor_izq.value = espesor + espesor1 + espesor2 + espesor3 + espesor4 + espesor5);
}

//Funcion valorEstructura

function valorEstructuraIzq(){
let valor = triceps_estructura_izq.value == 1;
let estructura = valor ? 1 : 0;
triceps_estructura_izq.value = estructura;

let valor1 = cuadriceps_estructura_izq.value == 1;
let estructura1 = valor1 ? 1 : 0;
cuadriceps_estructura_izq.value = estructura1;

let valor2 = patelar_prox_estructura_izq.value == 1;
let estructura2 = valor2 ? 1 : 0;
patelar_prox_estructura_izq.value = estructura2;

let valor3 = patelar_dist_estructura_izq.value == 1;
let estructura3 = valor3 ? 1 : 0;
patelar_dist_estructura_izq.value = estructura3;

let valor4 = aquileo_estructura_izq.value == 1;
let estructura4 = valor4 ? 1 : 0;
aquileo_estructura_izq.value = estructura4;

let valor5 = fascia_plantar_estructura_izq.value == 1;
let estructura5 = valor5 ? 1 : 0;
fascia_plantar_estructura_izq.value = estructura5;

return (total_estructura_izq.value =  estructura + estructura1 + estructura2 + estructura3 + estructura4 + estructura5);
}

//Función valorBursitis

function valorBursitisIzq(){

let valor3 = patelar_dist_bursitis_izq.value == 1;
let bursitis3 = valor3 ? 1 : 0;
patelar_dist_bursitis_izq.value = bursitis3;

let valor4 = aquileo_bursitis_izq.value == 1;
let bursitis4 = valor4 ? 1 : 0;
aquileo_bursitis_izq.value = bursitis4;

return (total_bursitis_izq.value = bursitis3 + bursitis4);
}

//Funcion valorErosion

function valorErosionIzq(){
    let valor = triceps_erosion_izq.value == 3;
    let erosion = valor ? 3 : 0;
    triceps_erosion_izq.value = erosion;
    
    let valor1 = cuadriceps_erosion_izq.value == 3;
    let erosion1 = valor1 ? 3 : 0;
    cuadriceps_erosion_izq.value = erosion1;
    
    let valor2 = patelar_prox_erosion_izq.value == 3;
    let erosion2 = valor2 ? 3 : 0;
    patelar_prox_erosion_izq.value = erosion2;
    
    let valor3 = patelar_dist_erosion_izq.value == 3;
    let erosion3 = valor3 ? 3 : 0;
    patelar_dist_erosion_izq.value = erosion3;
    
    let valor4 = aquileo_erosion_izq.value == 3;
    let erosion4 = valor4 ? 3 : 0;
    aquileo_erosion_izq.value = erosion4;
    
    let valor5 = fascia_plantar_erosion_izq.value == 3;
    let erosion5 = valor5 ? 3 : 0;
    fascia_plantar_erosion_izq.value = erosion5;
    
    return (total_erosion_izq.value = erosion + erosion1 + erosion2 + erosion3 + erosion4 + erosion5);
    }

    //Funcion valorCalcificaciones
function valorCalcIzq(){
    valor = triceps_calc_izq.value;
    if(valor == 3){
        valor = 3;
    }else if(valor == 2){
        valor = 2;
    }else if(valor == 1){
        valor = 1;
    }else {
        valor = 0;
    }
    let calc = valor;
    triceps_calc_izq.value = calc;

    valor1 = cuadriceps_calc_izq.value;
    if(valor1 == 3){
        valor1 = 3;
    }else if(valor1 == 2){
        valor1 = 2;
    }else if(valor1 == 1){
        valor1 = 1;
    }else {
        valor1 = 0;
    }
    let calc1 = valor1;
    cuadriceps_calc_izq.value = calc1;

    valor2 = patelar_prox_calc_izq.value;
    if(valor2 == 3){
        valor2 = 3;
    }else if(valor2 == 2){
        valor2 = 2;
    }else if(valor2 == 1){
        valor2 = 1;
    }else {
        valor2 = 0;
    }
    let calc2 = valor2;
    patelar_prox_calc_izq.value = calc2;

    valor3 = patelar_dist_calc_izq.value;
    if(valor3 == 3){
        valor3 = 3;
    }else if(valor3 == 2){
        valor3 = 2;
    }else if(valor3 == 1){
        valor3 = 1;
    }else {
        valor3 = 0;
    }
    let calc3 = valor3;
    patelar_dist_calc_izq.value = calc3;

    valor4 = aquileo_calc_izq.value;
    if(valor4 == 3){
        valor4 = 3;
    }else if(valor4 == 2){
        valor4 = 2;
    }else if(valor4 == 1){
        valor4 = 1;
    }else {
        valor4 = 0;
    }
    let calc4 = valor4;
    aquileo_calc_izq.value = calc4;

    valor5 = fascia_plantar_calc_izq.value;
    if(valor5 == 3){
        valor5 = 3;
    }else if(valor5 == 2){
        valor5 = 2;
    }else if(valor5 == 1){
        valor5 = 1;
    }else {
        valor5 = 0;
    }
    let calc5 = valor5;
    fascia_plantar_calc_izq.value = calc5;

    return (total_calc_izq.value = calc + calc1 + calc2 + calc3 + calc4 + calc5);

}
    //Funcion valorPWD

function valorPwdIzq(){
    let valor = triceps_pwd_izq.value == 3;
    let pwd = valor ? 3 : 0;
    triceps_pwd_izq.value = pwd;
    
    let valor1 = cuadriceps_pwd_izq.value == 3;
    let pwd1 = valor1 ? 3 : 0;
    cuadriceps_pwd_izq.value = pwd1;
    
    let valor2 = patelar_prox_pwd_izq.value == 3;
    let pwd2 = valor2 ? 3 : 0;
    patelar_prox_pwd_izq.value = pwd2;
    
    let valor3 = patelar_dist_pwd_izq.value == 3;
    let pwd3 = valor3 ? 3 : 0;
    patelar_dist_pwd_izq.value = pwd3;
    
    let valor4 = aquileo_pwd_izq.value == 3;
    let pwd4 = valor4 ? 3 : 0;
    aquileo_pwd_izq.value = pwd4;
    
    let valor5 = fascia_plantar_pwd_izq.value == 3;
    let pwd5 = valor5 ? 3 : 0;
    fascia_plantar_pwd_izq.value = pwd5;
    
    return (total_pwd_izq.value = pwd + pwd1 + pwd2 + pwd3 + pwd4 + pwd5);
    }

    function totalIzq(){
        total_izq.value = valorEstructuraIzq() + valorEspesorIzq()+ valorBursitisIzq()+ valorCalcIzq() +valorPwdIzq() + valorErosionIzq();
    }

    //************************************IZQUIERDA******************************************* */
    
    //*************************************DERECHA******************************************** */
//Espesor
let triceps_valor_der = document.getElementById('triceps_valor_der');
let triceps_espesor_der = document.getElementById('triceps_espesor_der');

let cuadriceps_valor_der = document.getElementById('cuadriceps_valor_der');
let cuadriceps_espesor_der = document.getElementById('cuadriceps_espesor_der');

let patelar_prox_valor_der = document.getElementById('patelar_prox_valor_der');
let patelar_prox_espesor_der = document.getElementById('patelar_prox_espesor_der');

let patelar_dist_valor_der = document.getElementById('patelar_dist_valor_der');
let patelar_dist_espesor_der = document.getElementById('patelar_dist_espesor_der');

let aquileo_valor_der = document.getElementById('aquileo_valor_der');
let aquileo_espesor_der = document.getElementById('aquileo_espesor_der');

let fascia_plantar_valor_der = document.getElementById('fascia_plantar_valor_der');
let fascia_plantar_espesor_der = document.getElementById('fascia_plantar_espesor_der');

let total_espesor_der = document.getElementById('total_espesor_der');

//Estructura
let triceps_estructura_der = document.getElementById('triceps_estructura_der');
let cuadriceps_estructura_der = document.getElementById('cuadriceps_estructura_der');
let patelar_prox_estructura_der = document.getElementById('patelar_prox_estructura_der'); 
let patelar_dist_estructura_der = document.getElementById('patelar_dist_estructura_der');
let aquileo_estructura_der = document.getElementById('aquileo_estructura_der');
let fascia_plantar_estructura_der = document.getElementById('fascia_plantar_estructura_der');

let total_estructura_der = document.getElementById('total_estructura_der');


//Bursitis 
let patelar_dist_bursitis_der = document.getElementById('patelar_dist_bursitis_der');
let aquileo_bursitis_der = document.getElementById('aquileo_bursitis_der');

let total_bursitis_der = document.getElementById('total_bursitis_der');

//Erosion
let triceps_erosion_der = document.getElementById('triceps_erosion_der');
let cuadriceps_erosion_der = document.getElementById('cuadriceps_erosion_der');
let patelar_prox_erosion_der = document.getElementById('patelar_prox_erosion_der'); 
let patelar_dist_erosion_der = document.getElementById('patelar_dist_erosion_der');
let aquileo_erosion_der = document.getElementById('aquileo_erosion_der');
let fascia_plantar_erosion_der = document.getElementById('fascia_plantar_erosion_der');

let total_erosion_der = document.getElementById('total_erosion_der');

//Calcificaciones
let triceps_calc_der = document.getElementById('triceps_calc_der');
let cuadriceps_calc_der = document.getElementById('cuadriceps_calc_der');
let patelar_prox_calc_der = document.getElementById('patelar_prox_calc_der'); 
let patelar_dist_calc_der = document.getElementById('patelar_dist_calc_der');
let aquileo_calc_der = document.getElementById('aquileo_calc_der');
let fascia_plantar_calc_der = document.getElementById('fascia_plantar_calc_der');

let total_calc_der = document.getElementById('total_calc_der');

//PWD
let triceps_pwd_der = document.getElementById('triceps_pwd_der');
let cuadriceps_pwd_der = document.getElementById('cuadriceps_pwd_der');
let patelar_prox_pwd_der = document.getElementById('patelar_prox_pwd_der'); 
let patelar_dist_pwd_der = document.getElementById('patelar_dist_pwd_der');
let aquileo_pwd_der = document.getElementById('aquileo_pwd_der');
let fascia_plantar_pwd_der = document.getElementById('fascia_plantar_pwd_der');

let total_pwd_der = document.getElementById('total_pwd_der');

//Total DER
let total_der = document.getElementById('total_der');

// Listeners Espesor
triceps_valor_der.addEventListener("keyup", valorEspesorDer);
triceps_valor_der.addEventListener("mouseup", valorEspesorDer);

cuadriceps_valor_der.addEventListener("keyup", valorEspesorDer);
cuadriceps_valor_der.addEventListener("mouseup", valorEspesorDer);

patelar_prox_valor_der.addEventListener("keyup", valorEspesorDer);
patelar_prox_valor_der.addEventListener("mouseup", valorEspesorDer);

patelar_dist_valor_der.addEventListener("keyup", valorEspesorDer);
patelar_dist_valor_der.addEventListener("mouseup", valorEspesorDer);

aquileo_valor_der.addEventListener("keyup", valorEspesorDer);
aquileo_valor_der.addEventListener("mouseup", valorEspesorDer);

fascia_plantar_valor_der.addEventListener("keyup", valorEspesorDer);
fascia_plantar_valor_der.addEventListener("mouseup", valorEspesorDer);


triceps_valor_der.addEventListener("keyup", totalDer);
triceps_valor_der.addEventListener("mouseup", totalDer);

cuadriceps_valor_der.addEventListener("keyup", totalDer);
cuadriceps_valor_der.addEventListener("mouseup", totalDer);

patelar_prox_valor_der.addEventListener("keyup", totalDer);
patelar_prox_valor_der.addEventListener("mouseup", totalDer);

patelar_dist_valor_der.addEventListener("keyup", totalDer);
patelar_dist_valor_der.addEventListener("mouseup", totalDer);

aquileo_valor_der.addEventListener("keyup", totalDer);
aquileo_valor_der.addEventListener("mouseup", totalDer);

fascia_plantar_valor_der.addEventListener("keyup", totalDer);
fascia_plantar_valor_der.addEventListener("mouseup", totalDer);

//Listeners Estructura
triceps_estructura_der.addEventListener("change", valorEstructuraDer);
cuadriceps_estructura_der.addEventListener("change", valorEstructuraDer);
patelar_prox_estructura_der.addEventListener("change", valorEstructuraDer);
patelar_dist_estructura_der.addEventListener("change", valorEstructuraDer);
aquileo_estructura_der.addEventListener("change", valorEstructuraDer);
fascia_plantar_estructura_der.addEventListener("change", valorEstructuraDer);

triceps_estructura_der.addEventListener("change", totalDer);
cuadriceps_estructura_der.addEventListener("change", totalDer);
patelar_prox_estructura_der.addEventListener("change", totalDer);
patelar_dist_estructura_der.addEventListener("change", totalDer);
aquileo_estructura_der.addEventListener("change", totalDer);
fascia_plantar_estructura_der.addEventListener("change", totalDer);

//Listeners Bursitis
patelar_dist_bursitis_der.addEventListener("change", valorBursitisDer);
aquileo_bursitis_der.addEventListener("change", valorBursitisDer);

patelar_dist_bursitis_der.addEventListener("change", totalDer);
aquileo_bursitis_der.addEventListener("change", totalDer);

//Listeners Erosion
triceps_erosion_der.addEventListener("change", valorErosionDer);
cuadriceps_erosion_der.addEventListener("change", valorErosionDer);
patelar_prox_erosion_der.addEventListener("change", valorErosionDer);
patelar_dist_erosion_der.addEventListener("change", valorErosionDer);
aquileo_erosion_der.addEventListener("change", valorErosionDer);
fascia_plantar_erosion_der.addEventListener("change", valorErosionDer);

triceps_erosion_der.addEventListener("change", totalDer);
cuadriceps_erosion_der.addEventListener("change", totalDer);
patelar_prox_erosion_der.addEventListener("change", totalDer);
patelar_dist_erosion_der.addEventListener("change", totalDer);
aquileo_erosion_der.addEventListener("change", totalDer);
fascia_plantar_erosion_der.addEventListener("change", totalDer);

//Listeners Calcificaciones
triceps_calc_der.addEventListener("change", valorCalcDer);
cuadriceps_calc_der.addEventListener("change", valorCalcDer);
patelar_prox_calc_der.addEventListener("change", valorCalcDer);
patelar_dist_calc_der.addEventListener("change", valorCalcDer);
aquileo_calc_der.addEventListener("change", valorCalcDer);
fascia_plantar_calc_der.addEventListener("change", valorCalcDer);

triceps_calc_der.addEventListener("change", totalDer);
cuadriceps_calc_der.addEventListener("change", totalDer);
patelar_prox_calc_der.addEventListener("change", totalDer);
patelar_dist_calc_der.addEventListener("change", totalDer);
aquileo_calc_der.addEventListener("change", totalDer);
fascia_plantar_calc_der.addEventListener("change", totalDer);

//Listeners PWD
triceps_pwd_der.addEventListener("change", valorPwdDer);
cuadriceps_pwd_der.addEventListener("change", valorPwdDer);
patelar_prox_pwd_der.addEventListener("change", valorPwdDer);
patelar_dist_pwd_der.addEventListener("change", valorPwdDer);
aquileo_pwd_der.addEventListener("change", valorPwdDer);
fascia_plantar_pwd_der.addEventListener("change", valorPwdDer);

triceps_pwd_der.addEventListener("change", totalDer);
cuadriceps_pwd_der.addEventListener("change", totalDer);
patelar_prox_pwd_der.addEventListener("change", totalDer);
patelar_dist_pwd_der.addEventListener("change", totalDer);
aquileo_pwd_der.addEventListener("change", totalDer);
fascia_plantar_pwd_der.addEventListener("change", totalDer);

// Función valorEspesor.

function valorEspesorDer(){
    let valor = triceps_valor_der.value > 4.3;
    let espesor = valor ? 1 : 0;
    triceps_espesor_der.value = espesor;

    let valor1 = cuadriceps_valor_der.value > 6.1;
    let espesor1 = valor1 ? 1 : 0;
    cuadriceps_espesor_der.value = espesor1;

    let valor2 = patelar_prox_valor_der.value > 4.0;
    let espesor2 = valor2 ? 1 : 0;
    patelar_prox_espesor_der.value = espesor2;

    let valor3 = patelar_dist_valor_der.value > 4.0;
    let espesor3 = valor3 ? 1 : 0;
    patelar_dist_espesor_der.value = espesor3;


    let valor4 = aquileo_valor_der.value > 5.29;
    let espesor4 = valor4 ? 1 : 0;
    aquileo_espesor_der.value = espesor4;

    let valor5 = fascia_plantar_valor_der.value > 4.4;
    let espesor5 = valor5 ? 1 : 0;
    fascia_plantar_espesor_der.value = espesor5;

    return (total_espesor_der.value = espesor + espesor1 + espesor2 + espesor3 + espesor4 + espesor5);
}

//Funcion valorEstructura

function valorEstructuraDer(){
let valor = triceps_estructura_der.value == 1;
let estructura = valor ? 1 : 0;
triceps_estructura_der.value = estructura;

let valor1 = cuadriceps_estructura_der.value == 1;
let estructura1 = valor1 ? 1 : 0;
cuadriceps_estructura_der.value = estructura1;

let valor2 = patelar_prox_estructura_der.value == 1;
let estructura2 = valor2 ? 1 : 0;
patelar_prox_estructura_der.value = estructura2;

let valor3 = patelar_dist_estructura_der.value == 1;
let estructura3 = valor3 ? 1 : 0;
patelar_dist_estructura_der.value = estructura3;

let valor4 = aquileo_estructura_der.value == 1;
let estructura4 = valor4 ? 1 : 0;
aquileo_estructura_der.value = estructura4;

let valor5 = fascia_plantar_estructura_der.value == 1;
let estructura5 = valor5 ? 1 : 0;
fascia_plantar_estructura_der.value = estructura5;

return (total_estructura_der.value =  estructura + estructura1 + estructura2 + estructura3 + estructura4 + estructura5);
}

//Función valorBursitis

function valorBursitisDer(){

let valor3 = patelar_dist_bursitis_der.value == 1;
let bursitis3 = valor3 ? 1 : 0;
patelar_dist_bursitis_der.value = bursitis3;

let valor4 = aquileo_bursitis_der.value == 1;
let bursitis4 = valor4 ? 1 : 0;
aquileo_bursitis_der.value = bursitis4;

return (total_bursitis_der.value = bursitis3 + bursitis4);
}

//Funcion valorErosion

function valorErosionDer(){
    let valor = triceps_erosion_der.value == 3;
    let erosion = valor ? 3 : 0;
    triceps_erosion_der.value = erosion;
    
    let valor1 = cuadriceps_erosion_der.value == 3;
    let erosion1 = valor1 ? 3 : 0;
    cuadriceps_erosion_der.value = erosion1;
    
    let valor2 = patelar_prox_erosion_der.value == 3;
    let erosion2 = valor2 ? 3 : 0;
    patelar_prox_erosion_der.value = erosion2;
    
    let valor3 = patelar_dist_erosion_der.value == 3;
    let erosion3 = valor3 ? 3 : 0;
    patelar_dist_erosion_der.value = erosion3;
    
    let valor4 = aquileo_erosion_der.value == 3;
    let erosion4 = valor4 ? 3 : 0;
    aquileo_erosion_der.value = erosion4;
    
    let valor5 = fascia_plantar_erosion_der.value == 3;
    let erosion5 = valor5 ? 3 : 0;
    fascia_plantar_erosion_der.value = erosion5;
    
    return (total_erosion_der.value = erosion + erosion1 + erosion2 + erosion3 + erosion4 + erosion5);
    }

    //Funcion valorCalcificaciones
function valorCalcDer(){
    valor = triceps_calc_der.value;
    if(valor == 3){
        valor = 3;
    }else if(valor == 2){
        valor = 2;
    }else if(valor == 1){
        valor = 1;
    }else {
        valor = 0;
    }
    let calc = valor;
    triceps_calc_der.value = calc;

    valor1 = cuadriceps_calc_der.value;
    if(valor1 == 3){
        valor1 = 3;
    }else if(valor1 == 2){
        valor1 = 2;
    }else if(valor1 == 1){
        valor1 = 1;
    }else {
        valor1 = 0;
    }
    let calc1 = valor1;
    cuadriceps_calc_der.value = calc1;

    valor2 = patelar_prox_calc_der.value;
    if(valor2 == 3){
        valor2 = 3;
    }else if(valor2 == 2){
        valor2 = 2;
    }else if(valor2 == 1){
        valor2 = 1;
    }else {
        valor2 = 0;
    }
    let calc2 = valor2;
    patelar_prox_calc_der.value = calc2;

    valor3 = patelar_dist_calc_der.value;
    if(valor3 == 3){
        valor3 = 3;
    }else if(valor3 == 2){
        valor3 = 2;
    }else if(valor3 == 1){
        valor3 = 1;
    }else {
        valor3 = 0;
    }
    let calc3 = valor3;
    patelar_dist_calc_der.value = calc3;

    valor4 = aquileo_calc_der.value;
    if(valor4 == 3){
        valor4 = 3;
    }else if(valor4 == 2){
        valor4 = 2;
    }else if(valor4 == 1){
        valor4 = 1;
    }else {
        valor4 = 0;
    }
    let calc4 = valor4;
    aquileo_calc_der.value = calc4;

    valor5 = fascia_plantar_calc_der.value;
    if(valor5 == 3){
        valor5 = 3;
    }else if(valor5 == 2){
        valor5 = 2;
    }else if(valor5 == 1){
        valor5 = 1;
    }else {
        valor5 = 0;
    }
    let calc5 = valor5;
    fascia_plantar_calc_der.value = calc5;

    return (total_calc_der.value = calc + calc1 + calc2 + calc3 + calc4 + calc5);

}
    //Funcion valorPWD

function valorPwdDer(){
    let valor = triceps_pwd_der.value == 3;
    let pwd = valor ? 3 : 0;
    triceps_pwd_der.value = pwd;
    
    let valor1 = cuadriceps_pwd_der.value == 3;
    let pwd1 = valor1 ? 3 : 0;
    cuadriceps_pwd_der.value = pwd1;
    
    let valor2 = patelar_prox_pwd_der.value == 3;
    let pwd2 = valor2 ? 3 : 0;
    patelar_prox_pwd_der.value = pwd2;
    
    let valor3 = patelar_dist_pwd_der.value == 3;
    let pwd3 = valor3 ? 3 : 0;
    patelar_dist_pwd_der.value = pwd3;
    
    let valor4 = aquileo_pwd_der.value == 3;
    let pwd4 = valor4 ? 3 : 0;
    aquileo_pwd_der.value = pwd4;
    
    let valor5 = fascia_plantar_pwd_der.value == 3;
    let pwd5 = valor5 ? 3 : 0;
    fascia_plantar_pwd_der.value = pwd5;
    
    return (total_pwd_der.value = pwd + pwd1 + pwd2 + pwd3 + pwd4 + pwd5);
    }

    function totalDer(){
        total_der.value = valorEstructuraDer() + valorEspesorDer()+ valorBursitisDer()+ valorCalcDer() +valorPwdDer() + valorErosionDer();
    }
    //*************************************DERECHA******************************************** */
var radio_hiper_der = document.getElementById('radio_hiper_der')
var radio_hiper_izq = document.getElementById('radio_hiper_izq')
var radio_power_der = document.getElementById('radio_power_der')
var radio_power_izq = document.getElementById('radio_power_izq')
var ifp2_hiper_der = document.getElementById('2ifp_hiper_der')
var ifp2_hiper_izq = document.getElementById('2ifp_hiper_izq')
var ifp2_power_der = document.getElementById('2ifp_power_der')
var ifp2_power_izq = document.getElementById('2ifp_power_izq')
var ifp3_hiper_der = document.getElementById('3ifp_hiper_der')
var ifp3_hiper_izq = document.getElementById('3ifp_hiper_izq')
var ifp3_power_der = document.getElementById('3ifp_power_der')
var ifp3_power_izq = document.getElementById('3ifp_power_izq')
var ifp4_hiper_der = document.getElementById('4ifp_hiper_der')
var ifp4_hiper_izq = document.getElementById('4ifp_hiper_izq')
var ifp4_power_der = document.getElementById('4ifp_power_der')
var ifp4_power_izq = document.getElementById('4ifp_power_izq')
var ifp5_hiper_der = document.getElementById('5ifp_hiper_der')
var ifp5_hiper_izq = document.getElementById('5ifp_hiper_izq')
var ifp5_power_der = document.getElementById('5ifp_power_der')
var ifp5_power_izq = document.getElementById('5ifp_power_izq')
var rrl_hiper_der = document.getElementById('rrl_hiper_der')
var rrl_hiper_izq = document.getElementById('rrl_hiper_izq')
var rrl_power_der = document.getElementById('rrl_power_der')
var rrl_power_izq = document.getElementById('rrl_power_izq')

var flexlong_2_derrame_der = document.getElementById('flexlong_2_derrame_der')
var flexlong_2_power_der = document.getElementById('flexlong_2_power_der')
var flexlong_2_derrame_izq = document.getElementById('flexlong_2_derrame_izq')
var flexlong_2_power_izq = document.getElementById('flexlong_2_power_izq')

var flexlong_3_derrame_der = document.getElementById('flexlong_3_derrame_der')
var flexlong_3_power_der = document.getElementById('flexlong_3_power_der')
var flexlong_3_derrame_izq = document.getElementById('flexlong_3_derrame_izq')
var flexlong_3_power_izq = document.getElementById('flexlong_3_power_izq')

var flexlong_4_derrame_der = document.getElementById('flexlong_4_derrame_der')
var flexlong_4_power_der = document.getElementById('flexlong_4_power_der')
var flexlong_4_derrame_izq = document.getElementById('flexlong_4_derrame_izq')
var flexlong_4_power_izq = document.getElementById('flexlong_4_power_izq')

var flexlong_5_derrame_der = document.getElementById('flexlong_5_derrame_der')
var flexlong_5_power_der = document.getElementById('flexlong_5_power_der')
var flexlong_5_derrame_izq = document.getElementById('flexlong_5_derrame_izq')
var flexlong_5_power_izq = document.getElementById('flexlong_5_power_izq')

var extlong_2_derrame_der = document.getElementById('extlong_2_derrame_der')
var extlong_2_power_der = document.getElementById('extlong_2_power_der')
var extlong_2_derrame_izq = document.getElementById('extlong_2_derrame_izq')
var extlong_2_power_izq = document.getElementById('extlong_2_power_izq')

var extlong_3_derrame_der = document.getElementById('extlong_3_derrame_der')
var extlong_3_power_der = document.getElementById('extlong_3_power_der')
var extlong_3_derrame_izq = document.getElementById('extlong_3_derrame_izq')
var extlong_3_power_izq = document.getElementById('extlong_3_power_izq')

var extlong_4_derrame_der = document.getElementById('extlong_4_derrame_der')
var extlong_4_power_der = document.getElementById('extlong_4_power_der')
var extlong_4_derrame_izq = document.getElementById('extlong_4_derrame_izq')
var extlong_4_power_izq = document.getElementById('extlong_4_power_izq')

var extlong_5_derrame_der = document.getElementById('extlong_5_derrame_der')
var extlong_5_power_der = document.getElementById('extlong_5_power_der')
var extlong_5_derrame_izq = document.getElementById('extlong_5_derrame_izq')
var extlong_5_power_izq = document.getElementById('extlong_5_power_izq')

var extran_2_derrame_der = document.getElementById('extran_2_derrame_der')
var extran_2_power_der = document.getElementById('extran_2_power_der')
var extran_2_derrame_izq = document.getElementById('extran_2_derrame_izq')
var extran_2_power_izq = document.getElementById('extran_2_power_izq')

var infraprox_camb_der = document.getElementById('infraprox_camb_der')
var infraprox_camb_izq = document.getElementById('infraprox_camb_izq')
var infraprox_engro_der = document.getElementById('infraprox_engro_der')
var infraprox_engro_izq = document.getElementById('infraprox_engro_izq')
var infraprox_calci_der = document.getElementById('infraprox_calci_der')
var infraprox_calci_izq = document.getElementById('infraprox_calci_izq')
var infraprox_ente_der = document.getElementById('infraprox_ente_der')
var infraprox_ente_izq = document.getElementById('infraprox_ente_izq')
var infraprox_power_der = document.getElementById('infraprox_power_der')
var infraprox_power_izq = document.getElementById('infraprox_power_izq')

var infradis_camb_der = document.getElementById('infradis_camb_der')
var infradis_camb_izq = document.getElementById('infradis_camb_izq')
var infradis_engro_der = document.getElementById('infradis_engro_der')
var infradis_engro_izq = document.getElementById('infradis_engro_izq')
var infradis_calci_der = document.getElementById('infradis_calci_der')
var infradis_calci_izq = document.getElementById('infradis_calci_izq')
var infradis_ente_der = document.getElementById('infradis_ente_der')
var infradis_ente_izq = document.getElementById('infradis_ente_izq')
var infradis_power_der = document.getElementById('infradis_power_der')
var infradis_power_izq = document.getElementById('infradis_power_izq')

var aquileo_camb_der = document.getElementById('aquileo_camb_der')
var aquileo_camb_izq = document.getElementById('aquileo_camb_izq')
var aquileo_engro_der = document.getElementById('aquileo_engro_der')
var aquileo_engro_izq = document.getElementById('aquileo_engro_izq')
var aquileo_calci_der = document.getElementById('aquileo_calci_der')
var aquileo_calci_izq = document.getElementById('aquileo_calci_izq')
var aquileo_ente_der = document.getElementById('aquileo_ente_der')
var aquileo_ente_izq = document.getElementById('aquileo_ente_izq')
var aquileo_power_der = document.getElementById('aquileo_power_der')
var aquileo_power_izq = document.getElementById('aquileo_power_izq')

var epilat_camb_der = document.getElementById('epilat_camb_der')
var epilat_camb_izq = document.getElementById('epilat_camb_izq')
var epilat_engro_der = document.getElementById('epilat_engro_der')
var epilat_engro_izq = document.getElementById('epilat_engro_izq')
var epilat_calci_der = document.getElementById('epilat_calci_der')
var epilat_calci_izq = document.getElementById('epilat_calci_izq')
var epilat_ento_der = document.getElementById('epilat_ento_der')
var epilat_ento_izq = document.getElementById('epilat_ento_izq')
var epilat_power_der = document.getElementById('epilat_power_der')
var epilat_power_izq = document.getElementById('epilat_power_izq')

var conclusion_artritis = document.getElementById('conclusion_artritis')
var conclusion_tendones = document.getElementById('conclusion_tendones')
var conclusion_entesis = document.getElementById('conclusion_entesis')
var conclusion_hallazgos = document.getElementById('conclusion_hallazgos')

var tipo_estudio = document.getElementById('tipo_estudio');
var psa = document.getElementById('psa');
var masei = document.getElementById('masei');

if(tipo_estudio.value == ""){
    psa.style.display = 'none'
    masei.style.display = 'none'
}else if(tipo_estudio.value == "PSA"){
    psa.style.display = 'block'
    masei.style.display = 'none'
    radio_hiper_der.setAttribute("required", "");
    radio_hiper_izq.setAttribute("required", "");
    radio_power_der.setAttribute("required", "");
    radio_power_izq.setAttribute("required", "");
    ifp2_hiper_der.setAttribute("required", "");
ifp2_hiper_izq.setAttribute("required", "");
ifp2_power_der.setAttribute("required", "");
ifp2_power_izq.setAttribute("required", "");
ifp3_hiper_der.setAttribute("required", "");
ifp3_hiper_izq.setAttribute("required", "");
ifp3_power_der.setAttribute("required", "");
ifp3_power_izq.setAttribute("required", "");
ifp4_hiper_der.setAttribute("required", "");
ifp4_hiper_izq.setAttribute("required", "");
ifp4_power_der.setAttribute("required", "");
ifp4_power_izq.setAttribute("required", "");
ifp5_hiper_der.setAttribute("required", "");
ifp5_hiper_izq.setAttribute("required", "");
ifp5_power_der.setAttribute("required", "");
ifp5_power_izq.setAttribute("required", "");
rrl_hiper_der.setAttribute("required", "");
rrl_hiper_izq.setAttribute("required", "");
rrl_power_der.setAttribute("required", "");
rrl_power_izq.setAttribute("required", "");
flexlong_2_derrame_der.setAttribute("required", "");
flexlong_2_power_der.setAttribute("required", "");
flexlong_2_derrame_izq.setAttribute("required", "");
flexlong_2_power_izq.setAttribute("required", "");
flexlong_3_derrame_der.setAttribute("required", "");
flexlong_3_power_der.setAttribute("required", "");
flexlong_3_derrame_izq.setAttribute("required", "");
flexlong_3_power_izq.setAttribute("required", "");
flexlong_4_derrame_der.setAttribute("required", "");
flexlong_4_power_der.setAttribute("required", "");
flexlong_4_derrame_izq.setAttribute("required", "");
flexlong_4_power_izq.setAttribute("required", "");
flexlong_5_derrame_der.setAttribute("required", "");
flexlong_5_power_der.setAttribute("required", "");
flexlong_5_derrame_izq.setAttribute("required", "");
flexlong_5_power_izq.setAttribute("required", "");
extlong_2_derrame_der.setAttribute("required", "");
extlong_2_power_der.setAttribute("required", "");
extlong_2_derrame_izq.setAttribute("required", "");
extlong_2_power_izq.setAttribute("required", "");
extlong_3_derrame_der.setAttribute("required", "");
extlong_3_power_der.setAttribute("required", "");
extlong_3_derrame_izq.setAttribute("required", "");
extlong_3_power_izq.setAttribute("required", "");
extlong_4_derrame_der.setAttribute("required", "");
extlong_4_power_der.setAttribute("required", "");
extlong_4_derrame_izq.setAttribute("required", "");
extlong_4_power_izq.setAttribute("required", "");
extlong_5_derrame_der.setAttribute("required", "");
extlong_5_power_der.setAttribute("required", "");
extlong_5_derrame_izq.setAttribute("required", "");
extlong_5_power_izq.setAttribute("required", "");
extran_2_derrame_der.setAttribute("required", "");
extran_2_power_der.setAttribute("required", "");
extran_2_derrame_izq.setAttribute("required", "");
extran_2_power_izq.setAttribute("required", "");
infraprox_camb_der.setAttribute("required", "");
infraprox_camb_izq.setAttribute("required", "");
infraprox_engro_der.setAttribute("required", "");
infraprox_engro_izq.setAttribute("required", "");
infraprox_calci_der.setAttribute("required", "");
infraprox_calci_izq.setAttribute("required", "");
infraprox_ente_der.setAttribute("required", "");
infraprox_ente_izq.setAttribute("required", "");
infraprox_power_der.setAttribute("required", "");
infraprox_power_izq.setAttribute("required", "");
infradis_camb_der.setAttribute("required", "");
infradis_camb_izq.setAttribute("required", "");
infradis_engro_der.setAttribute("required", "");
infradis_engro_izq.setAttribute("required", "");
infradis_calci_der.setAttribute("required", "");
infradis_calci_izq.setAttribute("required", "");
infradis_ente_der.setAttribute("required", "");
infradis_ente_izq.setAttribute("required", "");
infradis_power_der.setAttribute("required", "");
infradis_power_izq.setAttribute("required", "");
aquileo_camb_der.setAttribute("required", "");
aquileo_camb_izq.setAttribute("required", "");
aquileo_engro_der.setAttribute("required", "");
aquileo_engro_izq.setAttribute("required", "");
aquileo_calci_der.setAttribute("required", "");
aquileo_calci_izq.setAttribute("required", "");
aquileo_ente_der.setAttribute("required", "");
aquileo_ente_izq.setAttribute("required", "");
aquileo_power_der.setAttribute("required", "");
aquileo_power_izq.setAttribute("required", "");
epilat_camb_der.setAttribute("required", "");
epilat_camb_izq.setAttribute("required", "");
epilat_engro_der.setAttribute("required", "");
epilat_engro_izq.setAttribute("required", "");
epilat_calci_der.setAttribute("required", "");
epilat_calci_izq.setAttribute("required", "");
epilat_ento_der.setAttribute("required", "");
epilat_ento_izq.setAttribute("required", "");
epilat_power_der.setAttribute("required", "");
epilat_power_izq.setAttribute("required", "");
conclusion_artritis.setAttribute("required", "");
conclusion_tendones.setAttribute("required", "");
conclusion_entesis.setAttribute("required", "");
conclusion_hallazgos.setAttribute("required", "");
}else{
    psa.style.display = 'none'
    masei.style.display = 'block'
}
