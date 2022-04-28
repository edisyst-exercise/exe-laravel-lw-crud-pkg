<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Task;

class Tasks extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $description, $user_id, $completed, $completed_at;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.tasks.view', [
            'tasks' => Task::latest()
						->orWhere('name', 'LIKE', $keyWord)
						->orWhere('description', 'LIKE', $keyWord)
						->orWhere('user_id', 'LIKE', $keyWord)
						->orWhere('completed', 'LIKE', $keyWord)
						->orWhere('completed_at', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->name = null;
		$this->description = null;
		$this->user_id = null;
		$this->completed = null;
		$this->completed_at = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'user_id' => 'required',
		'completed' => 'required',
        ]);

        Task::create([ 
			'name' => $this-> name,
			'description' => $this-> description,
			'user_id' => $this-> user_id,
			'completed' => $this-> completed,
			'completed_at' => $this-> completed_at
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Task Successfully created.');
    }

    public function edit($id)
    {
        $record = Task::findOrFail($id);

        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->description = $record-> description;
		$this->user_id = $record-> user_id;
		$this->completed = $record-> completed;
		$this->completed_at = $record-> completed_at;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'user_id' => 'required',
		'completed' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Task::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'description' => $this-> description,
			'user_id' => $this-> user_id,
			'completed' => $this-> completed,
			'completed_at' => $this-> completed_at
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Task Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Task::where('id', $id);
            $record->delete();
        }
    }
}
