<?php

namespace App\Factory;

use App\Entity\Notes;
use App\Repository\NotesRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Notes>
 *
 * @method        Notes|Proxy create(array|callable $attributes = [])
 * @method static Notes|Proxy createOne(array $attributes = [])
 * @method static Notes|Proxy find(object|array|mixed $criteria)
 * @method static Notes|Proxy findOrCreate(array $attributes)
 * @method static Notes|Proxy first(string $sortedField = 'id')
 * @method static Notes|Proxy last(string $sortedField = 'id')
 * @method static Notes|Proxy random(array $attributes = [])
 * @method static Notes|Proxy randomOrCreate(array $attributes = [])
 * @method static NotesRepository|RepositoryProxy repository()
 * @method static Notes[]|Proxy[] all()
 * @method static Notes[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Notes[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Notes[]|Proxy[] findBy(array $attributes)
 * @method static Notes[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Notes[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class NotesFactory extends ModelFactory
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
            'etudiants' => EtudiantsFactory::new(),
            'modules' => ModulesFactory::new(),
            'note' => self::faker()->randomFloat(2, 7, 20),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Notes $notes): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Notes::class;
    }
}
