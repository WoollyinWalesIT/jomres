
<
?
p
h
p

/
*
*

 
*
 
C
o
r
e
 
f
i
l
e
.

 
*

 
*
 
@
a
u
t
h
o
r
 
V
i
n
c
e
 
W
o
o
l
l
 
<
s
a
l
e
s
@
j
o
m
r
e
s
.
n
e
t
>

 
*

 
*
 
@
v
e
r
s
i
o
n
 
J
o
m
r
e
s
 
9
.
1
0
.
0
-
c
h
a
r
l
i
e

 
*

 
*
 
@
c
o
p
y
r
i
g
h
t
	
2
0
0
5
-
2
0
1
8
 
V
i
n
c
e
 
W
o
o
l
l

 
*
 
J
o
m
r
e
s
 
(
t
m
)
 
P
H
P
,
 
C
S
S
 
&
 
J
a
v
a
s
c
r
i
p
t
 
f
i
l
e
s
 
a
r
e
 
r
e
l
e
a
s
e
d
 
u
n
d
e
r
 
b
o
t
h
 
M
I
T
 
a
n
d
 
G
P
L
2
 
l
i
c
e
n
s
e
s
.
 
T
h
i
s
 
m
e
a
n
s
 
t
h
a
t
 
y
o
u
 
c
a
n
 
c
h
o
o
s
e
 
t
h
e
 
l
i
c
e
n
s
e
 
t
h
a
t
 
b
e
s
t
 
s
u
i
t
s
 
y
o
u
r
 
p
r
o
j
e
c
t
,
 
a
n
d
 
u
s
e
 
i
t
 
a
c
c
o
r
d
i
n
g
l
y

 
*
*
/


/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#

d
e
f
i
n
e
d
(
'
_
J
O
M
R
E
S
_
I
N
I
T
C
H
E
C
K
'
)
 
o
r
 
d
i
e
(
'
'
)
;

/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#


c
l
a
s
s
 
j
0
6
0
0
5
e
d
i
t
o
r

{

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
_
_
c
o
n
s
t
r
u
c
t
(
$
c
o
m
p
o
n
e
n
t
A
r
g
s
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
m
c
H
a
n
d
l
e
r
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
a
b
l
e
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
!
d
e
f
i
n
e
d
(
'
R
E
D
A
C
T
E
D
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
"

	
	
	
<
s
c
r
i
p
t
 
t
y
p
e
=
\
"
t
e
x
t
/
j
a
v
a
s
c
r
i
p
t
\
"
>

	
	
	
v
a
r
 
e
d
i
t
o
r
_
s
e
t
t
i
n
g
s
 
=
 
{

	
	
	
	
b
o
l
d
 
 
 
 
 
 
 
 
 
 
:
 
{
 
v
i
s
i
b
l
e
 
:
 
t
r
u
e
 
}
,

	
	
	
	
i
t
a
l
i
c
 
 
 
 
 
 
 
 
:
 
{
 
v
i
s
i
b
l
e
 
:
 
t
r
u
e
 
}
,

	
	
	
	
u
n
d
e
r
l
i
n
e
 
 
 
 
 
:
 
{
 
v
i
s
i
b
l
e
 
:
 
t
r
u
e
 
}
,

	
	
	
	
s
t
r
i
k
e
T
h
r
o
u
g
h
 
:
 
{
 
v
i
s
i
b
l
e
 
:
 
t
r
u
e
 
}
,

	
	
	
	

	
	
	
	
j
u
s
t
i
f
y
L
e
f
t
 
 
 
:
 
{
 
v
i
s
i
b
l
e
 
:
 
t
r
u
e
 
}
,

	
	
	
	
j
u
s
t
i
f
y
C
e
n
t
e
r
 
:
 
{
 
v
i
s
i
b
l
e
 
:
 
t
r
u
e
 
}
,

	
	
	
	
j
u
s
t
i
f
y
R
i
g
h
t
 
 
:
 
{
 
v
i
s
i
b
l
e
 
:
 
t
r
u
e
 
}
,

	
	
	
	
j
u
s
t
i
f
y
F
u
l
l
 
 
 
:
 
{
 
v
i
s
i
b
l
e
 
:
 
t
r
u
e
 
}
,


	
	
	
	
i
n
d
e
n
t
 
 
:
 
{
 
v
i
s
i
b
l
e
 
:
 
t
r
u
e
 
}
,

	
	
	
	
o
u
t
d
e
n
t
 
:
 
{
 
v
i
s
i
b
l
e
 
:
 
t
r
u
e
 
}
,


	
	
	
	
s
u
b
s
c
r
i
p
t
 
 
 
:
 
{
 
v
i
s
i
b
l
e
 
:
 
t
r
u
e
 
}
,

	
	
	
	
s
u
p
e
r
s
c
r
i
p
t
 
:
 
{
 
v
i
s
i
b
l
e
 
:
 
t
r
u
e
 
}
,

	
	
	
	

	
	
	
	
u
n
d
o
 
:
 
{
 
v
i
s
i
b
l
e
 
:
 
t
r
u
e
 
}
,

	
	
	
	
r
e
d
o
 
:
 
{
 
v
i
s
i
b
l
e
 
:
 
t
r
u
e
 
}
,

	
	
	
	

	
	
	
	
i
n
s
e
r
t
O
r
d
e
r
e
d
L
i
s
t
 
 
 
 
:
 
{
 
v
i
s
i
b
l
e
 
:
 
t
r
u
e
 
}
,

	
	
	
	
i
n
s
e
r
t
U
n
o
r
d
e
r
e
d
L
i
s
t
 
 
:
 
{
 
v
i
s
i
b
l
e
 
:
 
t
r
u
e
 
}
,

	
	
	
	
i
n
s
e
r
t
H
o
r
i
z
o
n
t
a
l
R
u
l
e
 
:
 
{
 
v
i
s
i
b
l
e
 
:
 
t
r
u
e
 
}
,


	
	
	
	
h
4
:
 
{

	
	
	
	
	
v
i
s
i
b
l
e
:
 
t
r
u
e
,

	
	
	
	
	
c
l
a
s
s
N
a
m
e
:
 
'
h
4
'
,

	
	
	
	
	
c
o
m
m
a
n
d
:
 
(
j
o
m
r
e
s
J
q
u
e
r
y
.
b
r
o
w
s
e
r
.
m
s
i
e
 
|
|
 
j
o
m
r
e
s
J
q
u
e
r
y
.
b
r
o
w
s
e
r
.
s
a
f
a
r
i
)
 
?
 
'
f
o
r
m
a
t
B
l
o
c
k
'
 
:
 
'
h
e
a
d
i
n
g
'
,

	
	
	
	
	
a
r
g
u
m
e
n
t
s
:
 
(
j
o
m
r
e
s
J
q
u
e
r
y
.
b
r
o
w
s
e
r
.
m
s
i
e
 
|
|
 
j
o
m
r
e
s
J
q
u
e
r
y
.
b
r
o
w
s
e
r
.
s
a
f
a
r
i
)
 
?
 
'
<
h
4
>
'
 
:
 
'
h
4
'
,

	
	
	
	
	
t
a
g
s
:
 
[
'
h
4
'
]
,

	
	
	
	
	
t
o
o
l
t
i
p
:
 
'
H
e
a
d
e
r
 
4
'

	
	
	
	
}
,

	
	
	
	
h
5
:
 
{

	
	
	
	
	
v
i
s
i
b
l
e
:
 
t
r
u
e
,

	
	
	
	
	
c
l
a
s
s
N
a
m
e
:
 
'
h
5
'
,

	
	
	
	
	
c
o
m
m
a
n
d
:
 
(
j
o
m
r
e
s
J
q
u
e
r
y
.
b
r
o
w
s
e
r
.
m
s
i
e
 
|
|
 
j
o
m
r
e
s
J
q
u
e
r
y
.
b
r
o
w
s
e
r
.
s
a
f
a
r
i
)
 
?
 
'
f
o
r
m
a
t
B
l
o
c
k
'
 
:
 
'
h
e
a
d
i
n
g
'
,

	
	
	
	
	
a
r
g
u
m
e
n
t
s
:
 
(
j
o
m
r
e
s
J
q
u
e
r
y
.
b
r
o
w
s
e
r
.
m
s
i
e
 
|
|
 
j
o
m
r
e
s
J
q
u
e
r
y
.
b
r
o
w
s
e
r
.
s
a
f
a
r
i
)
 
?
 
'
<
h
5
>
'
 
:
 
'
h
5
'
,

	
	
	
	
	
t
a
g
s
:
 
[
'
h
5
'
]
,

	
	
	
	
	
t
o
o
l
t
i
p
:
 
'
H
e
a
d
e
r
 
5
'

	
	
	
	
}
,

	
	
	
	
h
6
:
 
{

	
	
	
	
	
v
i
s
i
b
l
e
:
 
t
r
u
e
,

	
	
	
	
	
c
l
a
s
s
N
a
m
e
:
 
'
h
6
'
,

	
	
	
	
	
c
o
m
m
a
n
d
:
 
(
j
o
m
r
e
s
J
q
u
e
r
y
.
b
r
o
w
s
e
r
.
m
s
i
e
 
|
|
 
j
o
m
r
e
s
J
q
u
e
r
y
.
b
r
o
w
s
e
r
.
s
a
f
a
r
i
)
 
?
 
'
f
o
r
m
a
t
B
l
o
c
k
'
 
:
 
'
h
e
a
d
i
n
g
'
,

	
	
	
	
	
a
r
g
u
m
e
n
t
s
:
 
(
j
o
m
r
e
s
J
q
u
e
r
y
.
b
r
o
w
s
e
r
.
m
s
i
e
 
|
|
 
j
o
m
r
e
s
J
q
u
e
r
y
.
b
r
o
w
s
e
r
.
s
a
f
a
r
i
)
 
?
 
'
<
h
6
>
'
 
:
 
'
h
6
'
,

	
	
	
	
	
t
a
g
s
:
 
[
'
h
6
'
]
,

	
	
	
	
	
t
o
o
l
t
i
p
:
 
'
H
e
a
d
e
r
 
6
'

	
	
	
	
}
,

	
	
	
	

	
	
	
	
c
u
t
 
 
 
:
 
{
 
v
i
s
i
b
l
e
 
:
 
f
a
l
s
e
 
}
,

	
	
	
	
c
o
p
y
 
 
:
 
{
 
v
i
s
i
b
l
e
 
:
 
f
a
l
s
e
 
}
,

	
	
	
	
p
a
s
t
e
 
:
 
{
 
v
i
s
i
b
l
e
 
:
 
f
a
l
s
e
 
}
,

	
	
	
	
h
t
m
l
 
 
:
 
{
 
v
i
s
i
b
l
e
:
 
t
r
u
e
 
}
,

	
	
	
	
i
n
c
r
e
a
s
e
F
o
n
t
S
i
z
e
 
:
 
{
 
v
i
s
i
b
l
e
 
:
 
f
a
l
s
e
 
}
,

	
	
	
	
d
e
c
r
e
a
s
e
F
o
n
t
S
i
z
e
 
:
 
{
 
v
i
s
i
b
l
e
 
:
 
f
a
l
s
e
 
}
,

	
	
	
	
i
n
s
e
r
t
I
m
a
g
e
 
:
 
{
 
v
i
s
i
b
l
e
 
:
 
f
a
l
s
e
 
}
,

	
	
	
	
h
1
:
 
{
 
v
i
s
i
b
l
e
:
 
f
a
l
s
e
 
}
,

	
	
	
	
h
2
:
 
{
 
v
i
s
i
b
l
e
:
 
f
a
l
s
e
 
}
,

	
	
	
	
h
3
:
 
{
 
v
i
s
i
b
l
e
:
 
f
a
l
s
e
 
}
,

	
	
	
	
h
4
:
 
{
 
v
i
s
i
b
l
e
:
 
f
a
l
s
e
 
}
,

	
	
	
	
h
5
:
 
{
 
v
i
s
i
b
l
e
:
 
f
a
l
s
e
 
}
,

	
	
	
	
h
6
:
 
{
 
v
i
s
i
b
l
e
:
 
f
a
l
s
e
 
}
,

	
	
	
	
c
r
e
a
t
e
L
i
n
k
:
 
{
 
v
i
s
i
b
l
e
:
 
f
a
l
s
e
 
}
,

	
	
	
	
u
n
L
i
n
k
:
 
{
 
v
i
s
i
b
l
e
:
 
f
a
l
s
e
 
}
,

	
	
	
	
s
u
b
s
c
r
i
p
t
:
 
{
 
v
i
s
i
b
l
e
:
 
f
a
l
s
e
 
}
,

	
	
	
	
s
u
p
e
r
s
c
r
i
p
t
:
 
{
 
v
i
s
i
b
l
e
:
 
f
a
l
s
e
 
}
,

	
	
	
	
c
o
d
e
:
 
{
 
v
i
s
i
b
l
e
:
 
f
a
l
s
e
 
}

	
	
	
	
}
;

	
	
	
<
/
s
c
r
i
p
t
>

	
	
	
"
;

 
 
 
 
 
 
 
 
 
 
 
 
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
a
d
d
h
e
a
d
d
a
t
a
(
'
c
s
s
'
,
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
l
i
v
e
_
s
i
t
e
'
)
.
'
/
'
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
'
/
l
i
b
r
a
r
i
e
s
/
e
d
i
t
o
r
/
'
,
 
'
j
q
u
e
r
y
.
w
y
s
i
w
y
g
.
c
s
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
a
d
d
h
e
a
d
d
a
t
a
(
'
j
a
v
a
s
c
r
i
p
t
'
,
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
l
i
v
e
_
s
i
t
e
'
)
.
'
/
'
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
'
/
l
i
b
r
a
r
i
e
s
/
e
d
i
t
o
r
/
'
,
 
'
j
q
u
e
r
y
.
w
y
s
i
w
y
g
.
j
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
a
d
d
h
e
a
d
d
a
t
a
(
'
j
a
v
a
s
c
r
i
p
t
'
,
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
l
i
v
e
_
s
i
t
e
'
)
.
'
/
'
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
'
/
l
i
b
r
a
r
i
e
s
/
e
d
i
t
o
r
/
'
,
 
'
w
y
s
i
w
y
g
.
l
i
n
k
.
j
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
a
d
d
h
e
a
d
d
a
t
a
(
'
j
a
v
a
s
c
r
i
p
t
'
,
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
l
i
v
e
_
s
i
t
e
'
)
.
'
/
'
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
'
/
l
i
b
r
a
r
i
e
s
/
e
d
i
t
o
r
/
'
,
 
'
w
y
s
i
w
y
g
.
t
a
b
l
e
.
j
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
a
d
d
h
e
a
d
d
a
t
a
(
'
j
a
v
a
s
c
r
i
p
t
'
,
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
l
i
v
e
_
s
i
t
e
'
)
.
'
/
'
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
'
/
l
i
b
r
a
r
i
e
s
/
e
d
i
t
o
r
/
'
,
 
'
w
y
s
i
w
y
g
.
i
1
8
n
.
j
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
s
w
i
t
c
h
 
(
g
e
t
_
s
h
o
w
t
i
m
e
(
'
l
a
n
g
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
c
s
-
C
Z
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
n
g
f
i
l
e
 
=
 
'
l
a
n
g
.
c
s
.
j
s
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
d
e
-
D
E
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
n
g
f
i
l
e
 
=
 
'
l
a
n
g
.
d
e
.
j
s
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
e
s
-
E
S
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
n
g
f
i
l
e
 
=
 
'
l
a
n
g
.
e
s
.
j
s
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
f
r
-
F
R
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
n
g
f
i
l
e
 
=
 
'
l
a
n
g
.
f
r
.
j
s
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
h
e
-
I
L
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
n
g
f
i
l
e
 
=
 
'
l
a
n
g
.
h
e
.
j
s
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
h
r
-
H
R
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
n
g
f
i
l
e
 
=
 
'
l
a
n
g
.
h
r
.
j
s
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
i
t
-
I
T
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
n
g
f
i
l
e
 
=
 
'
l
a
n
g
.
i
t
.
j
s
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
j
p
-
J
P
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
n
g
f
i
l
e
 
=
 
'
l
a
n
g
.
j
a
.
j
s
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
n
b
-
N
O
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
n
g
f
i
l
e
 
=
 
'
l
a
n
g
.
n
b
.
j
s
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
n
l
-
N
L
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
n
g
f
i
l
e
 
=
 
'
l
a
n
g
.
n
l
.
j
s
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
p
l
-
P
L
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
n
g
f
i
l
e
 
=
 
'
l
a
n
g
.
p
l
.
j
s
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
p
t
-
B
R
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
n
g
f
i
l
e
 
=
 
'
l
a
n
g
.
p
t
_
b
r
.
j
s
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
z
h
-
C
N
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
n
g
f
i
l
e
 
=
 
'
l
a
n
g
.
z
h
-
c
n
.
j
s
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
s
l
-
S
I
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
n
g
f
i
l
e
 
=
 
'
l
a
n
g
.
s
l
.
j
s
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
s
e
-
S
E
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
n
g
f
i
l
e
 
=
 
'
l
a
n
g
.
s
e
.
j
s
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
r
u
-
R
U
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
n
g
f
i
l
e
 
=
 
'
l
a
n
g
.
r
u
.
j
s
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
d
e
f
a
u
l
t
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
n
g
f
i
l
e
 
=
 
'
l
a
n
g
.
e
n
.
j
s
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
a
d
d
h
e
a
d
d
a
t
a
(
'
j
a
v
a
s
c
r
i
p
t
'
,
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
l
i
v
e
_
s
i
t
e
'
)
.
'
/
'
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
'
/
l
i
b
r
a
r
i
e
s
/
e
d
i
t
o
r
/
i
1
8
n
/
'
,
 
$
l
a
n
g
f
i
l
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
d
e
f
i
n
e
(
'
R
E
D
A
C
T
E
D
'
,
 
1
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
r
e
t
 
=
 
'

	
	
	
<
t
e
x
t
a
r
e
a
 
i
d
=
"
e
d
i
t
o
r
_
'
 
.
$
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
n
a
m
e
'
 
]
.
'
"
 
n
a
m
e
=
"
'
.
$
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
n
a
m
e
'
 
]
.
'
"
 
s
t
y
l
e
=
"
h
e
i
g
h
t
:
 
'
.
$
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
h
e
i
g
h
t
'
 
]
.
'
p
x
;
 
w
i
d
t
h
:
9
5
%
"
 
a
u
t
o
c
o
m
p
l
e
t
e
=
\
'
o
f
f
\
'
>

	
	
	
<
/
t
e
x
t
a
r
e
a
>
<
s
c
r
i
p
t
 
t
y
p
e
=
"
t
e
x
t
/
j
a
v
a
s
c
r
i
p
t
"
>

	
	
	
	
j
o
m
r
e
s
J
q
u
e
r
y
(
d
o
c
u
m
e
n
t
)
.
r
e
a
d
y
(
f
u
n
c
t
i
o
n
(
)
 
{
 
j
o
m
r
e
s
J
q
u
e
r
y
(
\
'
#
e
d
i
t
o
r
_
'
 
.
$
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
n
a
m
e
'
 
]
.
'
\
'
)
.
w
y
s
i
w
y
g
(
{
 
c
o
n
t
r
o
l
s
:
 
e
d
i
t
o
r
_
s
e
t
t
i
n
g
s
 
}
)
;

	
	
	
	
j
o
m
r
e
s
J
q
u
e
r
y
(
\
'
#
e
d
i
t
o
r
_
'
 
.
$
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
n
a
m
e
'
 
]
.
'
\
'
)
.
w
y
s
i
w
y
g
(
"
i
n
s
e
r
t
H
t
m
l
"
,
 
"
'
.
$
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
c
o
n
t
e
n
t
'
 
]
.
'
"
)
;

	
	
	
	
}
)
;

	
	
	
<
/
s
c
r
i
p
t
>

	
	
	
<
b
r
/
>

	
	
	
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
_
v
a
l
s
 
=
 
$
r
e
t
;

 
 
 
 
}


/
*
*

 
*
 
M
u
s
t
 
b
e
 
i
n
c
l
u
d
e
d
 
i
n
 
e
v
e
r
y
 
m
i
n
i
-
c
o
m
p
o
n
e
n
t
.

 
#

 
*
 
R
e
t
u
r
n
s
 
a
n
y
 
s
e
t
t
i
n
g
s
 
t
h
e
 
t
h
e
 
m
i
n
i
-
c
o
m
p
o
n
e
n
t
 
w
a
n
t
s
 
t
o
 
s
e
n
d
 
b
a
c
k
 
t
o
 
t
h
e
 
c
a
l
l
i
n
g
 
s
c
r
i
p
t
.
 
I
n
 
a
d
d
i
t
i
o
n
 
t
o
 
b
e
i
n
g
 
r
e
t
u
r
n
e
d
 
t
o
 
t
h
e
 
c
a
l
l
i
n
g
 
s
c
r
i
p
t
 
t
h
e
y
 
a
r
e
 
p
u
t
 
i
n
t
o
 
a
n
 
a
r
r
a
y
 
i
n
 
t
h
e
 
m
c
H
a
n
d
l
e
r
 
o
b
j
e
c
t
 
a
s
 
e
g
.
 
$
m
c
H
a
n
d
l
e
r
-
>
m
i
n
i
C
o
m
p
o
n
e
n
t
D
a
t
a
[
$
e
P
o
i
n
t
]
[
$
e
N
a
m
e
]

 
*
/

 
 
 
 
/
/
 
T
h
i
s
 
m
u
s
t
 
b
e
 
i
n
c
l
u
d
e
d
 
i
n
 
e
v
e
r
y
 
E
v
e
n
t
/
M
i
n
i
-
c
o
m
p
o
n
e
n
t

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
R
e
t
V
a
l
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
r
e
t
_
v
a
l
s
;

 
 
 
 
}

}

