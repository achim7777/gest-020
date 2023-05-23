<?php

namespace App\Factory;

use App\Entity\Enseignants;
use App\Repository\EnseignantsRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Enseignants>
 *
 * @method        Enseignants|Proxy create(array|callable $attributes = [])
 * @method static Enseignants|Proxy createOne(array $attributes = [])
 * @method static Enseignants|Proxy find(object|array|mixed $criteria)
 * @method static Enseignants|Proxy findOrCreate(array $attributes)
 * @method static Enseignants|Proxy first(string $sortedField = 'id')
 * @method static Enseignants|Proxy last(string $sortedField = 'id')
 * @method static Enseignants|Proxy random(array $attributes = [])
 * @method static Enseignants|Proxy randomOrCreate(array $attributes = [])
 * @method static EnseignantsRepository|RepositoryProxy repository()
 * @method static Enseignants[]|Proxy[] all()
 * @method static Enseignants[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Enseignants[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Enseignants[]|Proxy[] findBy(array $attributes)
 * @method static Enseignants[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Enseignants[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class EnseignantsFactory extends ModelFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
            'address' => self::faker()->address(),
            'cin' => self::faker()->realText(10),
            'email' => self::faker()->email(),
            'nom' => self::faker()->lastName(),
            'prenom' => self::faker()->firstName(),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Enseignants $enseignants): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Enseignants::class;
    }
}
