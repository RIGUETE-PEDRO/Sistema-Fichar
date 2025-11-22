<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // ROLES
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->unique(); // admin, medico, paciente, etc.
            $table->timestamps();
        });

        // USUARIOS
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email')->unique();
            $table->string('senha');
            $table->string('telefone')->nullable();
            $table->foreignId('role_id')->constrained('roles');
            $table->timestamps();
        });

        // ESPECIALIDADES
        Schema::create('especialidades', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->unique();
            $table->timestamps();
        });

        // MEDICOS
        Schema::create('medicos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained('usuarios'); // vínculo com usuário
            $table->foreignId('especialidade_id')->constrained('especialidades');
            $table->timestamps();
        });

        // DIAS DE TRABALHO
        Schema::create('dias_trabalho', function (Blueprint $table) {
            $table->id();
            $table->foreignId('medico_id')->constrained('medicos');
            $table->enum('dia_semana', ['SEG','TER','QUA','QUI','SEX','SAB']);
            $table->time('hora_inicio');
            $table->time('hora_fim');
            $table->timestamps();
        });

        // VAGAS MANUAIS
        Schema::create('vagas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('medico_id')->constrained('medicos');
            $table->date('data'); // ex: 2025-10-20
            $table->time('hora'); // ex: 13:30
            $table->boolean('disponivel')->default(true);
            $table->timestamps();
        });

        // AGENDAMENTOS
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vaga_id')->constrained('vagas');
            $table->foreignId('usuario_id')->constrained('usuarios'); // paciente
            $table->timestamps();
        });

        // LOGS DO SISTEMA
        Schema::create('logs_sistema', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->nullable()->constrained('usuarios');
            $table->string('acao');            // ex: "Criou vaga", "Cancelou agendamento"
            $table->text('detalhes')->nullable();
            $table->ipAddress('ip')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('logs_sistema');
        Schema::dropIfExists('agendamentos');
        Schema::dropIfExists('vagas');
        Schema::dropIfExists('dias_trabalho');
        Schema::dropIfExists('medicos');
        Schema::dropIfExists('especialidades');
        Schema::dropIfExists('usuarios');
        Schema::dropIfExists('roles');
    }
};
