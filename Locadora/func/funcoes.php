<?php
function listarTabela($campos, $tabela, $campoOrdem)
{
    $conn = conectar();
    try {
        $conn->beginTransaction();
        $sqlLista = $conn->prepare("SELECT $campos FROM $tabela ORDER BY $campoOrdem ");
        //        $sqlLista->bindValue(1, $campoParametro, PDO::PARAM_INT);
        $sqlLista->execute();
        $conn->commit();
        if ($sqlLista->rowCount() > 0) {
            return $sqlLista->fetchAll(PDO::FETCH_OBJ);
        } else {
            return 'Vazio';
        };
    } catch (PDOException $e) {
        echo 'Exception -> ';
        return ($e->getMessage());
        $conn->rollback();
    };
    $conn = null;
}

function validarSenha($campos, $tabela, $campoBdString, $campoBdString2, $campoParametro, $campoParametro2, $campoBdAtivo, $valorAtivo)
{
    $conn = conectar();

    try {
        $conn->beginTransaction();
        $sqlLista = $conn->prepare("SELECT $campos "
            . "FROM $tabela "
            . "WHERE $campoBdString = ? AND $campoBdString2 = ? AND $campoBdAtivo = ? ");
        $sqlLista->bindValue(1, $campoParametro, PDO::PARAM_STR);
        $sqlLista->bindValue(2, $campoParametro2, PDO::PARAM_STR);
        $sqlLista->bindValue(3, $valorAtivo, PDO::PARAM_STR);
        $sqlLista->execute();
        $conn->commit();
        if ($sqlLista->rowCount() > 0) {
            return $sqlLista->fetchAll(PDO::FETCH_OBJ);
        } else {
            return 'Vazio';
        }
    } catch (throwable $e) {
        $error_message = 'Throwable: ' . $e->getMessage() . PHP_EOL;
        $error_message = 'File: ' . $e->getFile() . PHP_EOL;
        $error_message = 'Line: ' . $e->getLine() . PHP_EOL;
        error_log($error_message, 3, 'log/arquivo_de_log.txt');
        $conn->rollback();
        throw $e;
    }
}

function validarSenhaCriptografia($campos, $tabela, $campoBdstring, $campoBdstring2, $campoParametro, $campoParametro2, $campobdativo, $valorativo)
{
    $conn = conectar();
    try {
        $conn->beginTransaction();
        $sqlLista = $conn->prepare("SELECT $campos "
            . "FROM $tabela "
            . "WHERE $campoBdstring = ? AND $campobdativo = ? ");
        $sqlLista->bindValue(1, $campoParametro, PDO::PARAM_STR);
        $sqlLista->bindValue(2, $valorativo, PDO::PARAM_STR);
        $sqlLista->execute();
        $conn->commit();
        if ($sqlLista->rowCount() > 0) {
            $retornoSql = $sqlLista->fetch(PDO::FETCH_OBJ);
            $senha_hash = $retornoSql->$campoBdstring2;
            if (password_verify($campoParametro2, $senha_hash)) {
                return $retornoSql;
            }
            return 'senha';
        } else {
            return 'usuario';
        }
        return null;
    } catch (Throwable $e) {
        echo 'Exception -> ';
        return ($e->getMessage());
        $conn->rollback();
    };
    $conn = null;
}
function insertUnico($tabela, $campos, $value1)
{
    $conn = conectar();
    try {
        $conn->beginTransaction();
        $sqInsert = $conn->prepare("INSERT INTO $tabela($campos) VALUES ('$value1')");
        // $sqInsert->bindValue(1, $value1, PDO::PARAM_STR);

        $sqInsert->execute();
        $conn->commit();
        if ($sqInsert->rowCount() > 0) {
            return $sqInsert->fetchAll(PDO::FETCH_OBJ);
        } else {
            return 'nGravado';
        };
    } catch (PDOException $e) {
        echo 'Execption -> ';
        return ($e->getMessage());
        $conn->rollback();
    };
    $conn = null;
} 

function AlterarUm($tabela, $campo, $valordb, $id, $idalt)
{
    $conn = conectar();
    try {
        $conn->beginTransaction();
        $sqInsert = $conn->prepare("UPDATE $tabela SET $campo = ? WHERE $id = ?");
        $sqInsert->bindValue(1, $valordb, PDO::PARAM_STR);
        $sqInsert->bindValue(2, $idalt, PDO::PARAM_INT);

        $sqInsert->execute();
        $conn->commit();
        if ($sqInsert->rowCount() > 0) {
            return $sqInsert->fetchAll(PDO::FETCH_OBJ);
        } else {
            return 'nGravado';
        };
    } catch (PDOException $e) {
        echo 'Execption -> ';
        return ($e->getMessage());
        $conn->rollback();
    };
    $conn = null;
} 

function apagarGenero ($tabela, $id, $idvalor){
    $conn = conectar();
    try {
        $conn->beginTransaction();
        $sqInsert = $conn->prepare("DELETE FROM $tabela WHERE $id = ?");
        $sqInsert->bindValue(1, $idvalor, PDO::PARAM_INT);

        $sqInsert->execute();
        $conn->commit();
        if ($sqInsert->rowCount() > 0) {
            return $sqInsert->rowCount();
        } else {
            return null;
        };
    } catch (PDOException $e) {
        echo 'Execption -> ';
        return ($e->getMessage());
        $conn->rollback();
    };
    $conn = null;
}