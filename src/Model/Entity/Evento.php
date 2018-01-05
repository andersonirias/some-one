<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Evento Entity
 *
 * @property int $id
 * @property string $titulo
 * @property string $descricao
 * @property \Cake\I18n\Time $data
 * @property int $tempoduracao
 * @property int $tipo
 * @property int $curtidas
 * @property int $descurtidas
 * @property int $categoria
 * @property int $produtor
 * @property int $endereco
 * @property \Cake\I18n\Time $criacao
 * @property \Cake\I18n\Time $alteracao
 */
class Evento extends Entity
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
