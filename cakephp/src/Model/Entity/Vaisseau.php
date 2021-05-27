<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Vaisseau Entity
 *
 * @property int $id
 * @property string $nom_classe
 * @property float|null $longueur
 * @property string|null $prix
 * @property int $equipage
 * @property bool $boucliers
 * @property string|null $MGLT
 * @property bool $hyperdrive
 * @property int|null $hyperdrive_classe
 * @property int $classe_id
 * @property int $constructeur_id
 *
 * @property \App\Model\Entity\VaisseauClasse $vaisseau_classe
 * @property \App\Model\Entity\Constructeur $constructeur
 */
class Vaisseau extends Entity
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
        'nom_classe' => true,
        'longueur' => true,
        'prix' => true,
        'equipage' => true,
        'boucliers' => true,
        'MGLT' => true,
        'hyperdrive' => true,
        'hyperdrive_classe' => true,
        'classe_id' => true,
        'constructeur_id' => true,
        'vaisseau_classe' => true,
        'constructeur' => true
    ];
}
