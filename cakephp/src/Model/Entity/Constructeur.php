<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Constructeur Entity
 *
 * @property int $id
 * @property string $nom_constructeur
 * @property int|null $planete_constructeur
 *
 * @property \App\Model\Entity\Vaisseau[] $vaisseau
 */
class Constructeur extends Entity
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
        'nom_constructeur' => true,
        'planete_constructeur' => true,
        'vaisseau' => true
    ];
}
