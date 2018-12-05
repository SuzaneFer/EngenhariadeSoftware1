--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`CodProduto`, `Nome`, `Descricao`, `Preco`, `QTD_estoque`, `Fornecedor_CNPJ`) VALUES
('1', 'Pao de Forma', 'pao de forma do tipo tal ', 4, 12, '456789123456987'),
('2', 'Pao de queijo', 'pao de queijo  ', 3, 2, '1452634758698526');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `fk_Produto_Fornecedor1` FOREIGN KEY (`Fornecedor_CNPJ`) REFERENCES `fornecedor` (`CNPJ`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
