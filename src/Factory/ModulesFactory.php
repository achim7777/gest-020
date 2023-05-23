<?php

namespace App\Factory;

use App\Entity\Modules;
use App\Repository\ModulesRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Modules>
 *
 * @method        Modules|Proxy create(array|callable $attributes = [])
 * @method static Modules|Proxy createOne(array $attributes = [])
 * @method static Modules|Proxy find(object|array|mixed $criteria)
 * @method static Modules|Proxy findOrCreate(array $attributes)
 * @method static Modules|Proxy first(string $sortedField = 'id')
 * @method static Modules|Proxy last(string $sortedField = 'id')
 * @method static Modules|Proxy random(array $attributes = [])
 * @method static Modules|Proxy randomOrCreate(array $attributes = [])
 * @method static ModulesRepository|RepositoryProxy repository()
 * @method static Modules[]|Proxy[] all()
 * @method static Modules[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Modules[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Modules[]|Proxy[] findBy(array $attributes)
 * @method static Modules[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Modules[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class ModulesFactory extends ModelFactory
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
            'enseignants' => EnseignantsFactory::new(),
            'filieres' => FilieresFactory::new(),
            'nom' => self::faker()->realText(10),
            'semestres' => SemestresFactory::new(),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Modules $modules): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Modules::class;
    }
}
