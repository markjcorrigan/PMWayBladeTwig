<div>
    @if ($saved)
        <div class="alert alert-info">Application form saved successfully.</div>
    @endif
    <form wire:submit.prevent="saveForm">
        @csrf
        <div class="card mt-4">
            <div class="card-header">
                Questions
            </div>

            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th class="text-left">Template</th>
                        <th class="text-left">Question</th>
                        <th class="text-left" width="100"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($questions as $index => $question)
                        <tr>
                            <td class="p-1" valign="top">
                                <select wire:model="templates.{{$index}}" class="form-control">
                                    <option value="">-- choose from template --</option>
                                    @foreach ($all_templates as $template)
                                        <option value="{{ $template->id }}">
                                            {{ $template->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="p-1" valign="top">
                                <textarea wire:model="questions.{{$index}}" class="form-control" required></textarea>
                            </td>
                            <td class="p-1" valign="top">
                                <button wire:click.prevent="removeQuestion({{$index}})" class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="mt-3">
                    <button wire:click.prevent="addQuestion" class="btn btn-sm btn-primary">+ Add Question</button>
                </div>

            </div>
        </div>
        <br/>
        <div>
            <input type="submit" value="Save Application Form" class="btn btn-primary">
        </div>
    </form>
</div>
