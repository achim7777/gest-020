<?php

namespace App\Factory;

use App\Entity\Semestres;
use App\Repository\SemestresRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Semestres>
 *
 * @method        Semestres|Proxy create(array|callable $attributes = [])
 * @method static Semestres|Proxy createOne(array $attributes = [])
 * @method static Semestres|Proxy find(object|array|mixed $criteria)
 * @method static Semestres|Proxy findOrCreate(array $attributes)
 * @method static Semestres|Proxy first(string $sortedField = 'id')
 * @method static Semestres|Proxy last(string $sortedField = 'id')
 * @method static Semestres|Proxy random(array $attributes = [])
 * @method static Semestres|Proxy randomOrCreate(array $attributes = [])
 * @method static SemestresRepository|RepositoryProxy repository()
 * @method static Semestres[]|Proxy[] all()
 * @method static Semestres[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Semestres[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Semestres[]|Proxy[] findBy(array $attributes)
 * @method static Semestres[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Semestres[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class SemestresFactory extends ModelFactory
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
            // ->afterInstantiate(function(Semestres $semestres): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Semestres::class;
    }
}
