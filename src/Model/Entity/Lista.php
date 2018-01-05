<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Lista Entity
 *
 * @property int $id
 * @property string $titulo
 * @property string $descricao
 * @property int $evento
 * @property \Cake\I18n\Time $criacao
 * @property \Cake\I18n\Time $alteracao
 */
class Lista extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
