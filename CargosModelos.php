<?php

namespace App\helpers;

class CargosModelos {

    //JUST THIS PROJECT
    public static function CargosYModelos() {
        $crudSemiCompleto = ['update', 'read', 'create','download','sugerencia','firmar'];
        $crudCompleto = array_merge(['delete'], $crudSemiCompleto);
        
        //otros cargos NO_ADMIN
        $nombresDeCargos = [
            'responsable_de_recibir_la_inspeccion',//1
            'copasst', //2
            'lider_del_proceso', //3
            'verificador', //4
            'responsable_inspeccion',// 5
        ];//recuerda userseeder, RoleSeeder
        $isSome = [];
        foreach ($nombresDeCargos as $key => $value) {
            $isSome[] = 'is' . $value;
        }
        //arrrays for easyway
        $elcore = 'inspeccion';
        $Models = [
            'role',
            'permission',
            'user',

            $elcore,
            'area',
            'parametro',
        ];
        
        $fullCrud = [
            'responsable_inspeccion' => ['user', $elcore, 'area']
        ];
        return [
            'nombresDeCargos' => $nombresDeCargos,
            'Models' => $Models,
            'isSome' => $isSome,
            'core' => $elcore,
            'fullCrud' => $fullCrud,
            'crudCompleto' => $crudCompleto,
            'crudSemiCompleto' => $crudSemiCompleto,
        ];
    }
}
?>
