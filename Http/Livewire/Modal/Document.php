<?php

declare(strict_types=1);

namespace Modules\Gdpr\Http\Livewire\Modal;

// Remove
use Illuminate\Contracts\Support\Renderable;
use Modules\Cms\Actions\GetViewAction;
use Modules\Gdpr\Models\Document as Doc;
use Modules\Wire\View\Components\Modal\Modal;

class Document extends Modal
{
    public string $document_html;

    public function mount(string $id)
    {
        $this->document_html = Doc::findOrFail($id)->body_html;
    }

    public function render(): Renderable
    {
        $view = app(GetViewAction::class)->execute();

        $view_params = [
        ];

        return view($view, $view_params);
    }

    public static function attributes(): array
    {
        return [
            // Set the modal size to 2xl, you can choose between:
            // xs, sm, md, lg, xl, 2xl, 3xl, 4xl, 5xl, 6xl, 7xl
            'size' => '4xl',
        ];
    }

    public static function behavior(): array
    {
        return [
            // Close the modal if the escape key is pressed
            'close-on-escape' => true,
            // Close the modal if someone clicks outside the modal
            'close-on-backdrop-click' => false,
            // Trap the users focus inside the modal (e.g. input autofocus and going back and forth between input fields)
            'trap-focus' => true,
            // Remove all unsaved changes once someone closes the modal
            'remove-state-on-close' => false,
        ];
    }
}
