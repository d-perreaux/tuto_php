<?php
    function isValideRecipe(array $recipe): bool {
        if(array_key_exists('is_enabled', $recipe)){
            $isEnabled = $recipe['is_enabled'];
        } else {
            $isEnabled = false;
        }
        return $isEnabled;
    }

    function getRecipes(array $recipes): array {
        $validRecipes = [];
        foreach($recipes as $recipe){
            if(isValideRecipe($recipe)){
                $validRecipes[] = $recipe;
            }
        }
        return $validRecipes;
    }

    function displayAuthor(string $email, array $users): string {
        $stringReturn = "Pas d'utilisateur trouvé";
        foreach($users as $user){
            if($user['email'] === $email){
                $stringReturn = "{$user['full_name']} ({$user['age']} ans)";
            }
        }
        return $stringReturn;
    }