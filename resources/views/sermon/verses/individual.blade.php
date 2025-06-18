<section class="sermon-details section">

    <section class="py-5"
        style="
    background: url('https://i.pinimg.com/736x/2f/21/13/2f21133e200beb8b9bb68b936043a651.jpg') center center / cover no-repeat;
    backdrop-filter: blur(4px);
">
        <div class="container bg-white bg-opacity-75 p-5 rounded shadow">
            <div class="card border-0 bg-transparent">
                <div class="card-body">
                    <h2 class="card-title text-primary mb-4">
                        <i class="bi bi-journal-text me-2"></i>{{ $sermon->title }}
                    </h2>

                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item bg-transparent">
                            <i class="bi bi-calendar-event me-2 text-secondary"></i>
                            <strong>Date:</strong> {{ $sermon->date }}
                        </li>
                        <li class="list-group-item bg-transparent">
                            <i class="bi bi-book me-2 text-secondary"></i>
                            <strong>Text:</strong> {{ $sermon->text }}
                        </li>
                    </ul>

                    <button class="btn btn-outline-info" type="button" data-bs-toggle="collapse"
                        data-bs-target="#sermonNotes" aria-expanded="false" aria-controls="sermonNotes">
                        View Notes
                    </button>
                    <div class="collapse mt-3" id="sermonNotes">
                        <div class="card card-body bg-light">
                            {{ $sermon->notes }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</section>
