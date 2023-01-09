<?php

namespace App\Http\Livewire\Mintreu\Widgets;

use App\Models\Post;
use App\Models\Video;

use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

abstract  class Widget extends Component
{


    protected ?string $widgetView = null;
    protected array $attributes = [];
    protected ?string $type = null;
    protected ?string $title=null;
    protected mixed $records=null;
    protected mixed $record=null;
    protected ?Builder $builder=null;

    /**
     * @param array $attributes
     */
    public function __construct(array $attributes=[])
    {

        $this->attributes = $attributes;

    }

    /**
     * Refactor class specific
     * attributes in deep
     * @return void
     */
    abstract protected function resolveAttributes():void;

    protected function resolve()
    {

        if (isset($this->attributes['type']))
        {
            if($this->attributes['type'] == 'video')
            {
                $this->builder = Video::where('status',true);

            }else{
                $this->builder = Post::where('status',true);
            }
            $this->type = $this->attributes['type'];
        }


        if (isset($this->attributes['custom']) && !empty($this->attributes['custom']))
        {
            $this->builder->whereIn('id',$this->attributes['custom']);
        }else{

            if (isset($this->attributes['where']))
            {
                $this->builder->where($this->attributes['where'],$this->attributes['where_status']);
            }

            if (isset($this->attributes['latest']))
            {
                $this->builder->latest($this->attributes['latest']);
            }


            if (isset($this->attributes['limit']) && $this->attributes['limit'])
            {
                $this->builder->limit($this->attributes['limit']);
            }
        }

        if (isset($this->attributes['title']))
        {
            $this->title =  $this->attributes['title'];
        }
        // Overwrite able
        $this->resolveAttributes();
        if (is_null($this->records))
        {
            $this->records = is_null($this->builder) ? null : $this->builder->get();
        }


    }

    protected function withAdditional():array
    {
        return [];
    }


    public function render()
    {
        $this->resolve();
        return view($this->widgetView)->with(array_merge(['records' => $this->records,'record' => $this->record,'title' => $this->title,'type' => $this->type],$this->withAdditional()));
    }


}
