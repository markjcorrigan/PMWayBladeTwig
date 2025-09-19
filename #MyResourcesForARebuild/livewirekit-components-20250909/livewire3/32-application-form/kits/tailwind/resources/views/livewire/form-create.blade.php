<div>
    @if ($saved)
        <div class="p-2 bg-green-500 text-white border border-green-600 rounded-md">
            Application form saved successfully.
        </div>
    @endif

    <form wire:submit="saveForm">
        <div class="my-4 border border-gray-300 rounded-md">
            <div class="border-b border-gray-300 p-5">
                Questions
            </div>

            <div class="p-5">
                <table class="table table-auto w-full">
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
                                <select wire:model="templates.{{ $index }}" class="focus:outline-none w-full border rounded-md p-1 border-indigo-500">
                                    <option value="">-- choose from template --</option>
                                    @foreach ($all_templates as $template)
                                        <option value="{{ $template->id }}">
                                            {{ $template->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="p-1" valign="top">
                                <textarea wire:model="questions.{{ $index }}" class="focus:outline-none w-full border rounded-md p-1 border-indigo-500" required></textarea>
                            </td>
                            <td class="p-1" valign="top">
                                <button wire:click="removeQuestion({{ $index }})" type="button" class="hover:bg-red-600 ml-1 p-1 px-2 bg-red-500 border border-red-600 rounded-md text-white focus:outline-none">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="mt-3">
                    <button wire:click="addQuestion" type="button" class="hover:bg-indigo-600 p-1 px-4 bg-indigo-500 border border-indigo-600 rounded-md text-white focus:outline-none">+ Add Question</button>
                </div>

            </div>
        </div>

        <div>
            <button type="submit" class="hover:bg-indigo-600 cursor-pointer p-1 px-4 bg-indigo-500 border border-indigo-600 rounded-md text-white focus:outline-none">
                Save Application Form
            </button>
        </div>
    </form>
</div>
