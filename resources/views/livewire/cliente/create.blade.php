<div class="mt-5">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif




    <div style="width: 50%; margin-left: 25%; margin-bottom: 25px" class="card">
        <h5 style="text-align: center" class="card-header">Cadastro de Cliente</h5>

        <div class="card-body">

            <form wire:submit.prevent="store">
 


                <div class="mb-3">
                    <label for="email" class="form-label">Nome</label>
                    <input type="text"
                        style="border-radius: 100px; border-inline-color:black; border-block-color: black"
                        class="form-control" id="nome" name="nome" placeholder="Ex.: Robertinho"
                        wire:model.defer="nome">
                </div>

                <div class="mb-3">
                    <label for="endereco" class="form-label">endereco</label>
                    <input type="text"
                        style="border-radius: 100px; border-inline-color: black; border-block-color: black"
                        class="form-control" id="endereco" name="endereco" placeholder="Ex.: Rua: Parana 16-38"
                        wire:model.defer="endereco">
                </div>


                <div class="mb-3">
                    <label for="telefone" class="form-label">telefone</label>
                    <input type="text"
                        style="border-radius: 100px; border-inline-color: black; border-block-color: black"
                        class="form-control" id="telefone" name="telefone" placeholder="Ex.: (18) 981478390"
                        wire:model.defer="telefone">
                </div>

                <div class="mb-3">
                    <label for="cpf" class="form-label">cpf</label>
                    <input type="text"
                        style="border-radius: 100px; border-inline-color: black; border-block-color: black"
                        class="form-control" id="cpf" name="cpf" placeholder="Ex.: 422.113.338/42"
                        wire:model.defer="cpf">
                </div>

                <div class="mb-3">
                    <label for="cpf" class="form-label">email</label>
                    <input type="text"
                        style="border-radius: 100px; border-inline-color: black; border-block-color: black"
                        class="form-control" id="email" name="email" placeholder="Ex.: SeuEmail@gmail.com"
                        wire:model.defer="email">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">password</label>
                    <input type="password"
                        style="border-radius: 100px; border-inline-color: black; border-block-color: black"
                        class="form-control" id="password" name="password" placeholder="Ex.: ......."
                        wire:model.defer="password">
                </div>





                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Criar Conta</button>

                    <a style="margin-left: 90%; margin-bottom: 20px" href="/login">Login</a>
                </div>

                

                



            </form>

        </div>


    </div>





</div>