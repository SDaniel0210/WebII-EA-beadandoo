@extends('layouts.app')

@section('title','Dolgozók')
@section('body_class','is-preload no-scrolly')

@push('head')
  <link rel="stylesheet" href="{{ asset('assets/css/message.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/users.css') }}">
@endpush

@section('content')
<section class="wrapper style1 fade-up">
  <div class="inner users-inner">

    <header class="major users-header">
      <div>
        <h2>Dolgozók</h2>
        <p>A regisztrált dolgozók listája. Itt lehet hozzáadni, szerkeszteni, törölni.</p>
      </div>

      <button type="button" id="openOverlay" class="button primary">
        Új dolgozó hozzáadása
      </button>
    </header>

    <div class="users-card">
      @if($users->isEmpty())
        <p>Még nincs egyetlen dolgozó sem.</p>
      @else
        <div class="table-wrapper">
          <table class="users-table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Név</th>
                <th>Email</th>
                <th>Szerepkör</th>
                <th>Műveletek</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
                <tr>
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->role }}</td>
                  <td class="users-actions">
                    <button type="button"
                            class="action-link edit-btn"
                            data-id="{{ $user->id }}"
                            data-name="{{ $user->name }}"
                            data-email="{{ $user->email }}"
                            data-role="{{ $user->role }}">
                      Szerkesztés
                    </button>

                    <form method="POST"
                          action="{{ route('users.destroy', $user) }}"
                          class="inline-form"
                          onsubmit="return confirm('Biztosan törölni szeretnéd?');">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="action-link delete-btn">
                        Törlés
                      </button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      @endif
    </div>

  </div>
</section>

{{-- FELUGRÓ PANEL – új / szerkesztés --}}
<div id="overlay" class="overlay">
  <div class="overlay-panel contact-card">
    <div class="overlay-header">
      <h3 id="overlayTitle">Új dolgozó hozzáadása</h3>
    </div>

    <form method="POST"
          id="userForm"
          action="{{ route('users.store') }}"
          class="contact-form">
      @csrf
      {{-- PUT esetén JS fog betenni egy _method hidden-t --}}

      <div class="field">
        <label for="form-name">Név</label>
        <input type="text" id="form-name" name="name" value="{{ old('name') }}">
      </div>

      <div class="field">
        <label for="form-email">Email</label>
        <input type="email" id="form-email" name="email" value="{{ old('email') }}">
      </div>

      <div class="field">
        <label for="form-role">Szerepkör</label>
        <select id="form-role" name="role">
          <option value="registered">registered</option>
          <option value="admin">admin</option>
        </select>
      </div>

      <div class="field">
        <label for="form-password">Jelszó</label>
        <input type="password" id="form-password" name="password">
      </div>

      <ul class="actions contact-actions">
        <li>
          <button type="submit" class="button primary">
            OK
          </button>
        </li>
        <li>
          <button type="button" class="button" id="cancelOverlayBtn">
            Mégse
          </button>
        </li>
      </ul>
    </form>
  </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
  const overlay      = document.getElementById('overlay');
  const openBtn      = document.getElementById('openOverlay');
  const cancelBtn    = document.getElementById('cancelOverlayBtn');
  const form         = document.getElementById('userForm');
  const titleEl      = document.getElementById('overlayTitle');
  const nameInput    = document.getElementById('form-name');
  const emailInput   = document.getElementById('form-email');
  const roleInput    = document.getElementById('form-role');
  const passInput    = document.getElementById('form-password');

  function openOverlay() {
    overlay.style.display = 'flex';
  }
  function closeOverlay() {
    overlay.style.display = 'none';
  }

  if (openBtn) {
    openBtn.addEventListener('click', e => {
      e.preventDefault();
      titleEl.textContent = 'Új dolgozó hozzáadása';
      form.action = "{{ route('users.store') }}";

      nameInput.value  = '';
      emailInput.value = '';
      roleInput.value  = 'registered';
      passInput.value  = '';

      const hidden = form.querySelector('input[name="_method"]');
      if (hidden) hidden.remove();

      openOverlay();
    });
  }

  document.querySelectorAll('.edit-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      const id    = btn.dataset.id;
      const name  = btn.dataset.name;
      const email = btn.dataset.email;
      const role  = btn.dataset.role;

      titleEl.textContent = 'Dolgozó szerkesztése';
      form.action = "{{ url('/users') }}/" + id;

      nameInput.value  = name;
      emailInput.value = email;
      roleInput.value  = role;      
      passInput.value  = '';

      let hidden = form.querySelector('input[name="_method"]');
      if (!hidden) {
        hidden = document.createElement('input');
        hidden.type = 'hidden';
        hidden.name = '_method';
        form.appendChild(hidden);
      }
      hidden.value = 'PUT';

      openOverlay();
    });
  });

  if (cancelBtn) {
    cancelBtn.addEventListener('click', e => {
      e.preventDefault();
      closeOverlay();
    });
  }
});
</script>
@endpush
