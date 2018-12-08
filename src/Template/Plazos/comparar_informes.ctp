<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Plazo[]|\Cake\Collection\CollectionInterface $plazos
 */
?>
<div class="container-fluid">
    <div class="panel-heading">
        <div class="panel-title">Proyectos registrados</div>
        <button class="btn btn-primary"><?= $this->Html->link(__('Listar'), ['action' => 'listar']) ?> </button>
    </div>
    <div class="panel-body table-responsive">
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
            <thead>  
                <tr>
                    <th class="oculto">Id fase</th>
                    <th>Fase</th>
                    <th>Estudio fecha inicial</th>
                    <th>Estudio fecha final</th>
                    <th>Desarrollo fecha inicial</th>
                    <th>Desarrollo fecha final</th>
                </tr>
            </thead>
            <tbody>    
                <?php foreach ($fechas as $f): ?>         
                    <tr>
                        <td><?= $f['idfase'] ?></td>
                        <td><?= $f['fase'] ?></td>
                        <td>
                            <?php 
                                if($f['ini_estudio'] != null){
                                    echo $f['ini_estudio']->i18nFormat('dd-MM-yyyy'); 
                                }else{echo 'No editado';} 
                            ?>  
                        </td>
                        <td>
                            <?php 
                                if($f['fin_estudio'] != null){
                                    echo $f['fin_estudio']->i18nFormat('dd-MM-yyyy'); 
                                }else{echo 'No editado';} 
                            ?>  
                        </td>
                        <td>
                            <?php 
                                if($f['ini_desarrollo'] != null){
                                    echo $f['ini_desarrollo']->i18nFormat('dd-MM-yyyy'); 
                                }else{echo 'No editado';} 
                            ?>  
                        </td>
                        <td>
                            <?php 
                                if($f['fin_desarrollo'] != null){
                                    echo $f['fin_desarrollo']->i18nFormat('dd-MM-yyyy'); 
                                }else{echo 'No editado';} 
                            ?>  
                        </td>
                    </tr>       
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
