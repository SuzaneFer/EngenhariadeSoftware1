--
-- Extraindo dados da tabela `compra`
--

INSERT INTO `compra` (`CodCompra`, `Valor`, `Data`, `Funcionario_CPF_Funcionario`, `Cliente_CPF_Cliente`, `Produto_CodProduto`) VALUES
(2, 4, '12/01/2017', '12345678990', '12030138681', '1'),
(3, 3, '28/11/2018', '12345678978', '12345678912', '2'),
(4, 10, '02/12/2018', '12345678990', '12030138681', '1');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `fk_Compra_Cliente1` FOREIGN KEY (`Cliente_CPF_Cliente`) REFERENCES `cliente` (`CPF_Cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Compra_Funcionario1` FOREIGN KEY (`Funcionario_CPF_Funcionario`) REFERENCES `funcionario` (`CPF_Funcionario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Compra_Produto1` FOREIGN KEY (`Produto_CodProduto`) REFERENCES `produto` (`CodProduto`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
