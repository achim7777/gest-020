<?php

namespace App\Factory;

use App\Entity\Filieres;
use App\Repository\FilieresRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Filieres>
 *
 * @method        Filieres|Proxy create(array|callable $attributes = [])
 * @method static Filieres|Proxy createOne(array $attributes = [])
 * @method static Filieres|Proxy find(object|array|mixed $criteria)
 * @method static Filieres|Proxy findOrCreate(array $attributes)
 * @method static Filieres|Proxy first(string $sortedField = 'id')
 * @method static Filieres|Proxy last(string $sortedField = 'id')
 * @method static Filieres|Proxy random(array $attributes = [])
 * @method static Filieres|Proxy randomOrCreate(array $attributes = [])
 * @method static FilieresRepository|RepositoryProxy repository()
 * @method static Filieres[]|Proxy[] all()
 * @method static Filieres[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Filieres[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Filieres[]|Proxy[] findBy(array $attributes)
 * @method static Filieres[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Filieres[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class FilieresFactory extends ModelFactory
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
            'nom' => self::faker()->realText(10),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Filieres $filieres): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Filieres::class;
    }
}
