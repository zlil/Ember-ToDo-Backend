<?php


class Task extends Eloquent  {

    private $description;
    private $complete;
    private $active;
    public $timestamps = false;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tasks';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['created_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['description', 'complete', 'active'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
    ];

    /**
     * @param $description
     */
    function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    function getDescription()
    {
        return $this->description;
    }

    /**
     * @param $complete
     */
    function setComplete($complete)
    {
        $this->complete = $complete;
    }

    /**
     * @return mixed
     */
    function getComplete()
    {
        return $this->complete;
    }


    /**
     * @param $active
     */
    function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * @return mixed
     */
    function getActive()
    {
        return $this->active;
    }
}