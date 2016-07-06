<?php namespace Tests\Services\Flowers;

/**
 * This class contains unit tests for the Flower creator.
 */

use Mockery as m;
use Services\Flowers\FlowerCreator;
use TestCase;

class FlowerCreatorTest extends TestCase
{
    /** @var array */
    protected $attrs;

    /** @var \Mockery\MockInterface */
    protected $validator;

    /** @var \Mockery\MockInterface */
    protected $repository;

    /** @var \Mockery\MockInterface */
    protected $listener;

    /** @var string */
    protected $modelClass = '\Flower';

    public function setUp()
    {
        parent::setUp();

        $this->attrs = [];
        $this->validator = m::mock('Validators\FlowerValidator');
        $this->repository = m::mock('Contracts\Repositories\FlowerRepositoryInterface');
        $this->listener = m::mock('Contracts\Notification\CreatorInterface');
    }



    public function testCreateSuccess()
    {
        $this->validator->shouldReceive('validate')->with($this->attrs)->once()
            ->andReturn(true);

        $user = m::mock($this->modelClass);
        $this->repository->shouldReceive('create')->with($this->attrs)->once()
            ->andReturn($user);

        $this->listener->shouldReceive('creationSucceeded')->with($user)->once();

        $creator = new FlowerCreator($this->validator);
        $creator->create($this->repository, $this->listener, $this->attrs);
    }



    public function testCreateFail()
    {
        $this->validator->shouldReceive('validate')->with($this->attrs)->once()
            ->andReturn(true);

        $this->repository->shouldReceive('create')->with($this->attrs)->once()
            ->andReturn(false);

        $this->listener->shouldReceive('creationFailed')->once();

        $creator = new FlowerCreator($this->validator);
        $creator->create($this->repository, $this->listener, $this->attrs);
    }



    public function testCreateFailValidation()
    {
        $this->validator->shouldReceive('validate')->with($this->attrs)->once()
            ->andReturn(false);

        $this->listener->shouldReceive('creationFailedValidation')->with($this->validator)->once();

        $creator = new FlowerCreator($this->validator);
        $creator->create($this->repository, $this->listener, $this->attrs);
    }
}
