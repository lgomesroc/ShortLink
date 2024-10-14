<?php

namespace App\Services;

use App\Models\User;

class PasswordUpdateService
{
    public function updateUserPassword(User $user, $newPassword)
    {
        $arrayPasswords = $user->array_password ?? [];
        $arrayExpiry = $user->password_expiry ?? [];

        // Checa se a senha é repetida
        if (in_array($newPassword, $arrayPasswords)) {
            return ['error' => 'Senha repetida, por favor, digite uma não repetida.'];
        }

        $expiryDate = now()->addDays(45)->format('Y-m-d H:i:s');

        if (count($arrayPasswords) < 5) {
            $arrayPasswords[] = $newPassword;
            $arrayExpiry[] = $expiryDate;
        } else {
            if (now()->greaterThan($arrayExpiry[0])) {
                array_shift($arrayPasswords);
                array_shift($arrayExpiry);
            } else {
                return ['error' => 'Você precisa trocar a senha antes de mudar novamente.'];
            }

            $arrayPasswords[] = $newPassword;
            $arrayExpiry[] = $expiryDate;
        }

        // Atualiza o usuário
        $user->array_password = $arrayPasswords;
        $user->password_expiry = $arrayExpiry;
        $user->save();

        return ['success' => 'Senha trocada com sucesso.'];
    }
}
