
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
v
i
e
w
_
i
n
v
o
i
c
e

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

 
 
 
 
 
 
 
 
/
/
 
M
u
s
t
 
b
e
 
i
n
 
a
l
l
 
m
i
n
i
c
o
m
p
o
n
e
n
t
s
.
 
M
i
n
i
c
o
m
p
o
n
e
n
t
s
 
w
i
t
h
 
t
e
m
p
l
a
t
e
s
 
t
h
a
t
 
c
a
n
 
c
o
n
t
a
i
n
 
e
d
i
t
a
b
l
e
 
t
e
x
t
 
s
h
o
u
l
d
 
r
u
n
 
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
(
)
 
e
l
s
e
 
j
u
s
t
 
r
e
t
u
r
n

 
 
 
 
 
 
 
 
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


 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
_
i
d
 
=
 
i
n
t
v
a
l
(
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
i
d
'
,
 
0
)
)
;

 
 
 
 
 
 
 
 
$
p
o
p
u
p
 
=
 
i
n
t
v
a
l
(
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
p
o
p
u
p
'
,
 
0
)
)
;

 
 
 
 
 
 
 
 
$
b
y
p
a
s
s
_
s
e
c
u
r
i
t
y
_
c
h
e
c
k
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
_
n
o
w
 
=
 
t
r
u
e
;

	
	
$
l
i
n
e
_
i
t
e
m
s
_
o
n
l
y
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
$
p
a
g
e
o
u
t
p
u
t
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
$
r
o
w
s
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
$
t
r
a
n
s
a
c
t
i
o
n
_
r
o
w
s
 
=
 
a
r
r
a
y
(
)
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
V
a
l
s
 
=
 
'
'
;


 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
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
[
 
'
i
n
t
e
r
n
a
l
_
c
a
l
l
'
 
]
)
 
&
&
 
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
i
n
t
e
r
n
a
l
_
c
a
l
l
'
 
]
 
=
=
 
t
r
u
e
)
 
{
 
/
/
 
T
h
i
s
 
p
l
u
g
i
n
 
i
s
 
b
e
i
n
g
 
c
a
l
l
e
d
 
b
y
 
a
n
o
t
h
e
r
 
s
c
r
i
p
t
,
 
t
y
p
i
c
a
l
l
y
 
t
h
e
 
e
m
a
i
l
e
r
 
f
u
n
c
t
i
o
n
a
l
i
t
y
,
 
t
h
e
r
e
f
o
r
e
 
w
e
'
l
l
 
b
y
p
a
s
s
 
t
h
e
 
a
c
c
e
s
s
 
c
h
e
c
k
i
n
g
 
f
u
r
t
h
e
r
 
d
o
w
n

 
 
 
 
 
 
 
 
 
 
 
 
$
b
y
p
a
s
s
_
s
e
c
u
r
i
t
y
_
c
h
e
c
k
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
_
i
d
 
=
 
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
i
n
v
o
i
c
e
_
i
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
_
n
o
w
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
o
p
u
p
 
=
 
1
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
i
n
v
o
i
c
e
_
i
d
 
=
=
 
0
)
 
{
 
/
/
n
o
 
i
n
v
o
i
c
e
 
i
d
 
p
a
s
s
e
d
,
 
s
o
 
n
o
t
h
i
n
g
 
t
o
 
d
i
s
p
l
a
y

 
 
 
 
 
 
 
 
 
 
 
 
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
i
s
s
e
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
[
'
l
i
n
e
_
i
t
e
m
s
_
o
n
l
y
'
]
)
)
 
{

	
	
	
$
l
i
n
e
_
i
t
e
m
s
_
o
n
l
y
 
=
 
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
l
i
n
e
_
i
t
e
m
s
_
o
n
l
y
'
]
;

	
	
}


 
 
 
 
 
 
 
 
$
t
h
i
s
J
R
U
s
e
r
 
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
j
r
_
u
s
e
r
'
)
;


 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
 
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
b
a
s
i
c
_
i
n
v
o
i
c
e
_
d
e
t
a
i
l
s
'
)
;

 
 
 
 
 
 
 
 
$
i
n
v
o
i
c
e
-
>
g
a
t
h
e
r
D
a
t
a
(
$
i
n
v
o
i
c
e
_
i
d
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
i
n
v
o
i
c
e
-
>
r
a
i
s
e
d
_
d
a
t
e
 
<
=
 
'
1
9
7
0
-
0
1
-
0
1
 
0
0
:
0
0
:
0
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
S
o
m
e
 
s
e
c
u
r
i
t
y
 
c
h
e
c
k
s
 
T
O
D
O
:
 
I
s
 
t
h
i
s
 
r
e
a
l
l
y
 
n
e
c
e
s
s
a
r
y
 
h
e
r
e
?

 
 
 
 
 
 
 
 
i
f
 
(
!
$
b
y
p
a
s
s
_
s
e
c
u
r
i
t
y
_
c
h
e
c
k
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
i
n
v
o
i
c
e
-
>
c
o
n
t
r
a
c
t
_
i
d
 
>
 
0
)
 
{
 
/
/
 
I
t
'
s
 
a
 
b
o
o
k
i
n
g
 
i
n
v
o
i
c
e
 
b
e
i
n
g
 
v
i
e
w
e
d
 
e
i
t
h
e
r
 
b
y
 
t
h
e
 
g
u
e
s
t
 
o
r
 
a
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
 
f
o
r
 
t
h
e
 
a
p
p
r
o
p
r
i
a
t
e
 
p
r
o
p
e
r
t
y

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
I
s
M
a
n
a
g
e
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
g
e
t
D
e
f
a
u
l
t
P
r
o
p
e
r
t
y
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
c
o
n
t
r
a
c
t
_
i
d
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
i
n
v
o
i
c
e
s
 
W
H
E
R
E
 
i
d
 
=
 
'
.
$
i
n
v
o
i
c
e
-
>
i
d
.
'
 
A
N
D
 
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
'
.
(
i
n
t
)
 
$
p
r
o
p
e
r
t
y
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
,
 
1
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
$
r
e
s
u
l
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
t
r
i
g
g
e
r
_
e
r
r
o
r
(
'
U
n
a
b
l
e
 
t
o
 
v
i
e
w
 
i
n
v
o
i
c
e
,
 
c
a
n
n
o
t
 
c
o
r
r
o
l
a
t
e
 
i
d
 
w
i
t
h
 
p
r
o
p
e
r
t
y
 
u
i
d
.
'
,
 
E
_
U
S
E
R
_
E
R
R
O
R
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
i
d
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
p
o
r
t
a
l
_
i
n
v
o
i
c
e
s
 
W
H
E
R
E
 
`
c
m
s
_
u
s
e
r
_
i
d
`
=
 
'
.
(
i
n
t
)
 
$
t
h
i
s
J
R
U
s
e
r
-
>
i
d
.
'
 
A
N
D
 
`
i
d
`
 
=
 
'
.
(
i
n
t
)
 
$
i
n
v
o
i
c
e
-
>
i
d
.
'
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
c
o
u
n
t
(
$
r
e
s
u
l
t
)
 
<
 
1
 
|
|
 
c
o
u
n
t
(
$
r
e
s
u
l
t
)
 
>
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
t
r
i
g
g
e
r
_
e
r
r
o
r
(
'
U
n
a
b
l
e
 
t
o
 
v
i
e
w
 
i
n
v
o
i
c
e
,
 
e
i
t
h
e
r
 
i
n
v
o
i
c
e
 
i
d
 
n
o
t
 
f
o
u
n
d
,
 
o
r
 
i
n
v
o
i
c
e
 
i
d
 
t
a
m
p
e
r
e
d
 
w
i
t
h
.
'
,
 
E
_
U
S
E
R
_
E
R
R
O
R
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{
 
/
/
 
L
e
t
'
s
 
c
h
e
c
k
 
t
h
a
t
 
t
h
i
s
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
 
c
a
n
 
v
i
e
w
 
t
h
i
s
 
c
o
m
m
i
s
s
i
o
n
/
s
u
b
s
c
r
i
p
t
i
o
n
 
i
n
v
o
i
c
e

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
i
d
 
!
=
 
$
i
n
v
o
i
c
e
-
>
c
m
s
_
u
s
e
r
_
i
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
t
r
i
g
g
e
r
_
e
r
r
o
r
(
'
U
n
a
b
l
e
 
t
o
 
v
i
e
w
 
i
n
v
o
i
c
e
,
 
e
i
t
h
e
r
 
i
n
v
o
i
c
e
 
i
d
 
n
o
t
 
f
o
u
n
d
,
 
o
r
 
i
n
v
o
i
c
e
 
i
d
 
t
a
m
p
e
r
e
d
 
w
i
t
h
.
'
,
 
E
_
U
S
E
R
_
E
R
R
O
R
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
/
/
e
n
d
 
s
e
c
u
r
i
t
y
 
c
h
e
c
k
s
.
 
I
f
 
e
v
e
r
y
t
h
i
n
g
 
i
s
 
f
i
n
e
 
s
o
 
f
a
r
,
 
l
e
t
`
s
 
m
o
v
e
 
f
o
r
w
a
r
d
.


 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
i
n
v
o
i
c
e
-
>
c
o
n
t
r
a
c
t
_
i
d
 
>
 
0
)
 
{
 
/
/
 
I
t
'
s
 
a
 
b
o
o
k
i
n
g
 
i
n
v
o
i
c
e
 
b
e
i
n
g
 
v
i
e
w
e
d
 
e
i
t
h
e
r
 
b
y
 
t
h
e
 
g
u
e
s
t
 
o
r
 
a
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
 
f
o
r
 
t
h
e
 
a
p
p
r
o
p
r
i
a
t
e
 
p
r
o
p
e
r
t
y

 
 
 
 
 
 
 
 
 
 
 
 
$
m
r
C
o
n
f
i
g
 
=
 
g
e
t
P
r
o
p
e
r
t
y
S
p
e
c
i
f
i
c
S
e
t
t
i
n
g
s
(
$
i
n
v
o
i
c
e
-
>
p
r
o
p
e
r
t
y
_
u
i
d
)
;


 
 
 
 
 
 
 
 
 
 
 
 
/
/
g
e
t
 
t
h
e
 
c
o
n
t
r
a
c
t
 
d
e
t
a
i
l
s

 
 
 
 
 
 
 
 
 
 
 
 
/
/
W
e
 
w
o
n
`
t
 
u
s
e
 
t
h
e
 
b
a
s
i
c
 
c
o
n
t
r
a
c
t
 
d
e
t
a
i
l
s
 
h
e
r
e
 
s
i
n
c
e
 
i
t
 
g
e
t
s
 
t
o
o
 
m
u
c
h
 
d
a
t
a
 
f
o
r
 
w
h
a
t
 
w
e
 
n
e
e
d

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
g
u
e
s
t
_
u
i
d
,
 
t
a
g
,
 
a
p
p
r
o
v
e
d
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
c
o
n
t
r
a
c
t
s
 
W
H
E
R
E
 
c
o
n
t
r
a
c
t
_
u
i
d
 
=
 
'
.
$
i
n
v
o
i
c
e
-
>
c
o
n
t
r
a
c
t
_
i
d
.
'
 
A
N
D
 
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
'
.
$
i
n
v
o
i
c
e
-
>
p
r
o
p
e
r
t
y
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
t
r
a
c
t
D
a
t
a
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
,
 
2
)
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
$
c
o
n
t
r
a
c
t
D
a
t
a
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
t
r
i
g
g
e
r
_
e
r
r
o
r
(
'
U
n
a
b
l
e
 
t
o
 
g
e
t
 
t
h
e
 
c
o
n
t
r
a
c
t
 
d
e
t
a
i
l
s
.
'
,
 
E
_
U
S
E
R
_
E
R
R
O
R
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
C
L
I
E
N
T
_
D
E
T
A
I
L
S
_
T
E
M
P
L
A
T
E
'
 
]
 
=
 
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
s
p
e
c
i
f
i
c
E
v
e
n
t
(
'
0
6
0
0
5
'
,
 
'
s
h
o
w
_
g
u
e
s
t
_
d
e
t
a
i
l
s
'
,
 
a
r
r
a
y
(
'
g
u
e
s
t
_
u
i
d
'
 
=
>
 
$
c
o
n
t
r
a
c
t
D
a
t
a
[
'
g
u
e
s
t
_
u
i
d
'
]
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
B
U
S
I
N
E
S
S
_
D
E
T
A
I
L
S
_
T
E
M
P
L
A
T
E
'
 
]
 
=
 
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
s
p
e
c
i
f
i
c
E
v
e
n
t
(
'
0
6
0
0
0
'
,
 
'
s
h
o
w
_
h
o
t
e
l
_
d
e
t
a
i
l
s
'
,
 
a
r
r
a
y
(
'
p
r
o
p
e
r
t
y
_
u
i
d
'
 
=
>
 
$
i
n
v
o
i
c
e
-
>
p
r
o
p
e
r
t
y
_
u
i
d
)
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
B
O
O
K
I
N
G
_
N
U
M
B
E
R
'
 
]
 
=
 
$
c
o
n
t
r
a
c
t
D
a
t
a
[
'
t
a
g
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
_
N
U
M
B
E
R
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
B
O
O
K
I
N
G
_
N
U
M
B
E
R
'
,
 
'
_
J
O
M
R
E
S
_
B
O
O
K
I
N
G
_
N
U
M
B
E
R
'
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{
 
/
/
t
h
i
s
 
i
s
 
a
 
c
o
m
m
i
s
s
i
o
n
/
s
u
b
s
c
r
i
p
t
i
o
n
 
i
n
v
o
i
c
e

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
B
U
S
I
N
E
S
S
_
D
E
T
A
I
L
S
_
T
E
M
P
L
A
T
E
'
 
]
 
=
 
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
s
p
e
c
i
f
i
c
E
v
e
n
t
(
'
0
6
0
0
0
'
,
 
'
s
h
o
w
_
s
i
t
e
_
b
u
s
i
n
e
s
s
'
,
 
a
r
r
a
y
(
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
C
L
I
E
N
T
_
D
E
T
A
I
L
S
_
T
E
M
P
L
A
T
E
'
 
]
 
=
 
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
s
p
e
c
i
f
i
c
E
v
e
n
t
(
'
0
6
0
0
5
'
,
 
'
s
h
o
w
_
m
a
n
a
g
e
r
_
d
e
t
a
i
l
s
'
,
 
a
r
r
a
y
(
'
m
a
n
a
g
e
r
_
p
r
o
f
i
l
e
_
i
d
'
 
=
>
 
$
i
n
v
o
i
c
e
-
>
c
m
s
_
u
s
e
r
_
i
d
)
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
p
o
p
u
p
 
!
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
P
R
I
N
T
L
I
N
K
'
 
]
 
=
 
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
_
N
O
S
E
F
.
'
&
t
m
p
l
=
'
.
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
t
m
p
l
c
o
m
p
o
n
e
n
t
'
)
.
'
&
p
o
p
u
p
=
1
&
t
a
s
k
=
v
i
e
w
_
i
n
v
o
i
c
e
&
i
d
=
'
.
$
i
n
v
o
i
c
e
-
>
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
P
R
I
N
T
T
E
X
T
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
C
O
M
_
I
N
V
O
I
C
E
_
P
R
I
N
T
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
I
N
V
O
I
C
E
_
P
R
I
N
T
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
P
A
G
E
T
I
T
L
E
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
C
O
M
_
I
N
V
O
I
C
E
_
T
I
T
L
E
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
I
N
V
O
I
C
E
_
T
I
T
L
E
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
I
N
V
O
I
C
E
_
T
R
A
N
S
A
C
T
I
O
N
S
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
I
N
V
O
I
C
E
_
T
R
A
N
S
A
C
T
I
O
N
S
'
,
 
'
_
I
N
V
O
I
C
E
_
T
R
A
N
S
A
C
T
I
O
N
S
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
U
S
E
R
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
U
S
E
R
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
U
S
E
R
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
S
T
A
T
U
S
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
R
A
I
S
E
D
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
R
A
I
S
E
D
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
R
A
I
S
E
D
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
D
U
E
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
D
U
E
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
D
U
E
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
I
N
I
T
T
O
T
A
L
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
I
N
I
T
T
O
T
A
L
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
I
N
I
T
T
O
T
A
L
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
C
U
R
R
E
N
C
Y
C
O
D
E
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
C
U
R
R
E
N
C
Y
C
O
D
E
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
C
U
R
R
E
N
C
Y
C
O
D
E
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
I
N
V
O
I
C
E
N
O
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
V
O
I
C
E
_
N
U
M
B
E
R
'
,
 
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
V
O
I
C
E
_
N
U
M
B
E
R
'
)
;

	
	
$
o
u
t
p
u
t
[
 
'
T
R
A
N
S
A
C
T
I
O
N
_
I
D
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
T
R
A
N
S
A
C
T
I
O
N
_
I
D
S
'
,
 
'
T
R
A
N
S
A
C
T
I
O
N
_
I
D
S
'
)
;

	
	
$
o
u
t
p
u
t
[
 
'
P
A
Y
M
E
N
T
_
M
E
T
H
O
D
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
P
A
Y
M
E
N
T
_
M
E
T
H
O
D
'
,
 
'
P
A
Y
M
E
N
T
_
M
E
T
H
O
D
'
)
;


 
 
 
 
 
 
 
 
$
m
a
r
k
a
s
p
a
i
d
_
l
i
n
k
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
I
s
M
a
n
a
g
e
r
 
&
&
 
(
i
n
t
)
 
$
i
n
v
o
i
c
e
-
>
p
r
o
p
e
r
t
y
_
u
i
d
 
>
 
0
 
&
&
 
(
i
n
t
)
 
$
i
n
v
o
i
c
e
-
>
s
t
a
t
u
s
 
!
=
 
1
 
&
&
 
$
c
o
n
t
r
a
c
t
D
a
t
a
[
'
a
p
p
r
o
v
e
d
'
]
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
r
k
a
s
p
a
i
d
 
=
 
j
r
_
g
e
t
t
e
x
t
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
V
O
I
C
E
_
M
A
R
K
A
S
P
A
I
D
'
,
 
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
V
O
I
C
E
_
M
A
R
K
A
S
P
A
I
D
'
,
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
r
k
a
s
p
a
i
d
_
l
i
n
k
[
]
 
=
 
a
r
r
a
y
(
'
M
A
R
K
A
S
P
A
I
D
_
L
I
N
K
'
 
=
>
 
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
_
N
O
S
E
F
.
'
&
t
a
s
k
=
m
a
r
k
_
b
o
o
k
i
n
g
_
i
n
v
o
i
c
e
_
p
a
i
d
&
n
o
_
h
t
m
l
=
1
&
i
d
=
'
.
$
i
n
v
o
i
c
e
-
>
i
d
,
 
'
M
A
R
K
A
S
P
A
I
D
_
T
E
X
T
'
 
=
>
 
$
m
a
r
k
a
s
p
a
i
d
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
m
a
r
k
a
s
p
e
n
d
i
n
g
_
l
i
n
k
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
I
s
M
a
n
a
g
e
r
 
&
&
 
(
i
n
t
)
 
$
i
n
v
o
i
c
e
-
>
p
r
o
p
e
r
t
y
_
u
i
d
 
>
 
0
 
&
&
 
(
i
n
t
)
 
$
i
n
v
o
i
c
e
-
>
s
t
a
t
u
s
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
r
k
a
s
p
e
n
d
i
n
g
 
=
 
j
r
_
g
e
t
t
e
x
t
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
V
O
I
C
E
_
M
A
R
K
A
S
P
E
N
D
I
N
G
'
,
 
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
V
O
I
C
E
_
M
A
R
K
A
S
P
E
N
D
I
N
G
'
,
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
r
k
a
s
p
e
n
d
i
n
g
_
l
i
n
k
[
]
 
=
 
a
r
r
a
y
(
'
M
A
R
K
A
S
P
E
N
D
I
N
G
_
L
I
N
K
'
 
=
>
 
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
_
N
O
S
E
F
.
'
&
t
a
s
k
=
m
a
r
k
_
b
o
o
k
i
n
g
_
i
n
v
o
i
c
e
_
p
e
n
d
i
n
g
&
n
o
_
h
t
m
l
=
1
&
i
d
=
'
.
$
i
n
v
o
i
c
e
-
>
i
d
,
 
'
M
A
R
K
A
S
P
E
N
D
I
N
G
_
T
E
X
T
'
 
=
>
 
$
m
a
r
k
a
s
p
e
n
d
i
n
g
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
v
i
e
w
b
o
o
k
i
n
g
_
l
i
n
k
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
I
s
M
a
n
a
g
e
r
 
&
&
 
(
i
n
t
)
 
$
i
n
v
o
i
c
e
-
>
c
o
n
t
r
a
c
t
_
i
d
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
v
i
e
w
b
o
o
k
i
n
g
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
C
O
M
P
_
M
Y
U
S
E
R
_
V
I
E
W
B
O
O
K
I
N
G
'
,
 
'
_
J
O
M
C
O
M
P
_
M
Y
U
S
E
R
_
V
I
E
W
B
O
O
K
I
N
G
'
,
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
v
i
e
w
b
o
o
k
i
n
g
_
l
i
n
k
[
]
 
=
 
a
r
r
a
y
(
'
V
I
E
W
B
O
O
K
I
N
G
_
L
I
N
K
'
 
=
>
 
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
.
'
&
t
a
s
k
=
e
d
i
t
_
b
o
o
k
i
n
g
&
c
o
n
t
r
a
c
t
_
u
i
d
=
'
.
$
i
n
v
o
i
c
e
-
>
c
o
n
t
r
a
c
t
_
i
d
,
 
'
V
I
E
W
B
O
O
K
I
N
G
_
T
E
X
T
'
 
=
>
 
$
v
i
e
w
b
o
o
k
i
n
g
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
I
D
'
 
]
 
=
 
$
i
n
v
o
i
c
e
-
>
i
d
;


 
 
 
 
 
 
 
 
/
/
 
I
n
v
o
i
c
e
 
s
t
a
t
u
s
:

 
 
 
 
 
 
 
 
/
/
 
0
 
u
n
p
a
i
d

 
 
 
 
 
 
 
 
/
/
 
1
 
p
a
i
d

 
 
 
 
 
 
 
 
/
/
 
2
 
c
a
n
c
e
l
l
e
d

 
 
 
 
 
 
 
 
/
/
 
3
 
p
e
n
d
i
n
g

 
 
 
 
 
 
 
 
s
w
i
t
c
h
 
(
$
i
n
v
o
i
c
e
-
>
s
t
a
t
u
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
0
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
L
A
B
E
L
_
C
L
A
S
S
'
 
]
 
=
 
'
l
a
b
e
l
-
r
e
d
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
S
T
A
T
U
S
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
U
N
P
A
I
D
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
U
N
P
A
I
D
'
)
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
 
1
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
L
A
B
E
L
_
C
L
A
S
S
'
 
]
 
=
 
'
l
a
b
e
l
-
g
r
e
e
n
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
S
T
A
T
U
S
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
P
A
I
D
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
P
A
I
D
'
)
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
 
2
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
L
A
B
E
L
_
C
L
A
S
S
'
 
]
 
=
 
'
l
a
b
e
l
-
b
l
a
c
k
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
S
T
A
T
U
S
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
C
A
N
C
E
L
L
E
D
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
C
A
N
C
E
L
L
E
D
'
)
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
o
u
t
p
u
t
[
 
'
L
A
B
E
L
_
C
L
A
S
S
'
 
]
 
=
 
'
l
a
b
e
l
-
o
r
a
n
g
e
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
S
T
A
T
U
S
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
P
E
N
D
I
N
G
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
P
E
N
D
I
N
G
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
U
S
E
R
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
U
S
E
R
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
U
S
E
R
'
,
 
f
a
l
s
e
)
;

	
	

	
	
i
f
 
(
$
i
n
v
o
i
c
e
-
>
r
a
i
s
e
d
_
d
a
t
e
 
!
=
 
'
1
9
7
0
-
0
1
-
0
1
 
0
0
:
0
0
:
0
1
'
)

	
	
	
$
o
u
t
p
u
t
[
 
'
R
A
I
S
E
D
'
 
]
 
=
 
$
i
n
v
o
i
c
e
-
>
r
a
i
s
e
d
_
d
a
t
e
;

	
	
e
l
s
e

	
	
	
$
o
u
t
p
u
t
[
 
'
R
A
I
S
E
D
'
 
]
 
=
 
'
'
;

	
	

	
	
i
f
 
(
$
i
n
v
o
i
c
e
-
>
d
u
e
_
d
a
t
e
 
!
=
 
'
1
9
7
0
-
0
1
-
0
1
 
0
0
:
0
0
:
0
1
'
)

	
	
	
$
o
u
t
p
u
t
[
 
'
D
U
E
'
 
]
 
=
 
$
i
n
v
o
i
c
e
-
>
d
u
e
_
d
a
t
e
;

	
	
e
l
s
e

	
	
	
$
o
u
t
p
u
t
[
 
'
D
U
E
'
 
]
 
=
 
'
'
;


 
 
 
 
 
 
 
 
/
/
 
S
e
e
 
n
o
t
e
 
a
t
 
t
h
e
 
e
n
d
 
o
f
 
t
h
i
s
 
l
i
n
e
!

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
I
N
I
T
T
O
T
A
L
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
i
n
v
o
i
c
e
-
>
i
n
i
t
_
t
o
t
a
l
,
 
$
i
n
v
o
i
c
e
-
>
c
u
r
r
e
n
c
y
c
o
d
e
,
 
t
r
u
e
,
 
t
r
u
e
)
;
 
/
/
 
T
h
i
s
 
i
s
 
n
o
w
 
w
r
o
n
g
.
 
T
h
e
 
i
n
i
t
 
t
o
t
a
l
 
i
s
 
c
a
l
c
u
l
a
t
e
d
 
w
h
e
n
 
t
h
e
 
i
n
v
o
i
c
e
 
i
s
 
g
e
n
e
r
a
t
e
d
,
 
b
u
t
 
r
e
c
e
n
t
 
V
A
T
 
r
e
l
a
t
e
d
 
c
h
a
n
g
e
s
 
m
e
a
n
 
t
h
a
t
 
o
n
 
o
l
d
e
r
 
i
n
v
o
i
c
e
s
 
w
h
i
c
h
 
w
e
r
e
 
c
r
e
a
t
e
d
 
b
e
f
o
r
e
 
t
h
e
 
V
A
T
 
c
h
a
n
g
e
s
 
w
e
r
e
 
a
d
d
e
d
,
 
i
t
'
s
 
p
o
s
s
i
b
l
e
 
t
h
a
t
 
t
h
i
s
 
s
u
m
 
i
s
 
i
n
c
o
r
r
e
c
t
.
 
T
h
e
 
n
e
w
e
r
 
G
R
A
N
D
_
T
O
T
A
L
_
I
N
C
_
T
A
X
 
o
u
t
p
u
t
 
v
a
r
i
a
b
l
e
 
i
s
 
c
o
r
r
e
c
t
,
 
a
s
 
i
t
'
s
 
a
d
j
u
s
t
e
d
 
a
c
c
o
r
d
i
n
g
 
t
o
 
t
h
e
 
V
A
T
 
r
u
l
e
s
,
 
s
o
 
w
e
'
l
l
 
r
e
p
l
a
c
e
 
I
N
I
T
T
O
T
A
L
 
w
i
t
h
 
G
R
A
N
D
_
T
O
T
A
L
_
I
N
C
_
T
A
X
 
i
n
 
i
n
v
o
i
c
e
 
t
e
m
p
l
a
t
e
 
f
i
l
e
s
.


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
C
U
R
R
E
N
C
Y
C
O
D
E
'
 
]
 
=
 
$
i
n
v
o
i
c
e
-
>
c
u
r
r
e
n
c
y
c
o
d
e
;


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
L
I
P
A
G
E
T
I
T
L
E
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
L
I
_
N
A
M
E
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
N
A
M
E
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
N
A
M
E
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
L
I
_
D
E
S
C
R
I
P
T
I
O
N
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
D
E
S
C
R
I
P
T
I
O
N
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
D
E
S
C
R
I
P
T
I
O
N
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
C
U
R
R
E
N
C
Y
C
O
D
E
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
C
U
R
R
E
N
C
Y
C
O
D
E
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
C
U
R
R
E
N
C
Y
C
O
D
E
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
L
I
_
I
N
I
T
_
P
R
I
C
E
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
I
N
I
T
_
P
R
I
C
E
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
I
N
I
T
_
P
R
I
C
E
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
L
I
_
I
N
I
T
_
Q
T
Y
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
I
N
I
T
_
Q
T
Y
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
I
N
I
T
_
Q
T
Y
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
L
I
_
I
N
I
T
_
D
I
S
C
O
U
N
T
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
I
N
I
T
_
D
I
S
C
O
U
N
T
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
I
N
I
T
_
D
I
S
C
O
U
N
T
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
L
I
_
I
N
I
T
_
T
O
T
A
L
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
I
N
I
T
_
T
O
T
A
L
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
I
N
I
T
_
T
O
T
A
L
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
L
I
_
I
N
I
T
_
T
O
T
A
L
_
I
N
C
L
U
S
I
V
E
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
L
I
N
E
I
T
E
M
_
T
O
T
A
L
_
I
N
C
L
U
D
I
N
G
T
A
X
'
,
 
'
_
J
O
M
R
E
S
_
L
I
N
E
I
T
E
M
_
T
O
T
A
L
_
I
N
C
L
U
D
I
N
G
T
A
X
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
L
I
_
T
A
X
_
C
O
D
E
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
T
A
X
_
C
O
D
E
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
T
A
X
_
C
O
D
E
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
L
I
_
T
A
X
_
D
E
S
C
R
I
P
T
I
O
N
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
T
A
X
_
D
E
S
C
R
I
P
T
I
O
N
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
T
A
X
_
D
E
S
C
R
I
P
T
I
O
N
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
L
I
_
T
A
X
_
R
A
T
E
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
T
A
X
_
R
A
T
E
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
T
A
X
_
R
A
T
E
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
L
I
_
T
A
X
_
A
M
O
U
N
T
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
C
O
M
_
F
R
O
N
T
_
R
O
O
M
T
A
X
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
F
R
O
N
T
_
R
O
O
M
T
A
X
'
)
;


 
 
 
 
 
 
 
 
$
i
m
m
e
d
i
a
t
e
_
p
a
y
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
i
n
v
o
i
c
e
-
>
s
t
a
t
u
s
 
=
=
 
3
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
(
!
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
I
s
M
a
n
a
g
e
r
 
&
&
 
!
$
t
h
i
s
J
R
U
s
e
r
-
>
s
u
p
e
r
P
r
o
p
e
r
t
y
M
a
n
a
g
e
r
 
&
&
 
$
i
n
v
o
i
c
e
-
>
c
o
n
t
r
a
c
t
_
i
d
 
>
 
0
 
&
&
 
$
i
n
v
o
i
c
e
-
>
i
s
_
c
o
m
m
i
s
s
i
o
n
 
=
=
 
0
 
&
&
 
$
i
n
v
o
i
c
e
-
>
s
u
b
s
c
r
i
p
t
i
o
n
 
=
=
 
0
 
&
&
 
$
c
o
n
t
r
a
c
t
D
a
t
a
[
'
a
p
p
r
o
v
e
d
'
]
 
=
=
 
1
)
 
|
|
 
/
/
b
o
o
k
i
n
g
 
i
n
v
o
i
c
e
 
v
i
e
w
e
d
 
b
y
 
g
u
e
s
t

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
(
$
i
n
v
o
i
c
e
-
>
c
o
n
t
r
a
c
t
_
i
d
 
=
=
 
0
 
&
&
 
(
$
i
n
v
o
i
c
e
-
>
i
s
_
c
o
m
m
i
s
s
i
o
n
 
>
 
0
 
|
|
 
$
i
n
v
o
i
c
e
-
>
s
u
b
s
c
r
i
p
t
i
o
n
 
>
 
0
)
)
 
/
/
s
u
b
s
c
r
i
p
t
i
o
n
 
o
r
 
c
o
m
m
i
s
s
i
o
n
 
i
n
v
o
i
c
e
 
v
i
e
w
e
d
 
b
y
 
a
 
m
a
n
a
g
e
r

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
T
O
D
O
 
c
l
e
a
n
 
t
h
i
s
 
u
p
 
a
n
d
 
d
i
s
p
l
a
y
 
g
a
t
e
w
a
y
 
i
m
a
g
e
s
 
o
r
 
s
o
m
e
t
h
i
n
g

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
p
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
p
[
 
'
I
M
M
E
D
I
A
T
E
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
P
A
Y
N
O
W
_
D
E
S
C
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
P
A
Y
N
O
W
_
D
E
S
C
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
p
[
 
'
P
A
Y
N
O
W
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
P
A
Y
N
O
W
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
P
A
Y
N
O
W
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
p
[
 
'
I
N
V
_
I
D
'
 
]
 
=
 
$
i
n
v
o
i
c
e
-
>
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
p
[
 
'
L
I
V
E
S
I
T
E
'
 
]
 
=
 
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
m
e
d
i
a
t
e
_
p
a
y
[
 
]
 
=
 
$
i
p
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
i
n
v
o
i
c
e
-
>
l
i
n
e
i
t
e
m
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
i
n
v
o
i
c
e
-
>
l
i
n
e
i
t
e
m
s
 
a
s
 
$
l
i
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
I
D
'
 
]
 
=
 
$
l
i
[
 
'
i
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
L
I
_
N
A
M
E
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
$
l
i
[
 
'
n
a
m
e
'
 
]
,
 
$
l
i
[
 
'
n
a
m
e
'
 
]
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
L
I
_
D
E
S
C
R
I
P
T
I
O
N
'
 
]
 
=
 
$
l
i
[
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
L
I
_
I
N
I
T
_
P
R
I
C
E
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
l
i
[
 
'
i
n
i
t
_
p
r
i
c
e
'
 
]
,
 
$
i
n
v
o
i
c
e
-
>
c
u
r
r
e
n
c
y
c
o
d
e
,
 
f
a
l
s
e
,
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
L
I
_
I
N
I
T
_
Q
T
Y
'
 
]
 
=
 
$
l
i
[
 
'
i
n
i
t
_
q
t
y
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
L
I
_
I
N
I
T
_
D
I
S
C
O
U
N
T
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
l
i
[
 
'
i
n
i
t
_
d
i
s
c
o
u
n
t
'
 
]
,
 
$
i
n
v
o
i
c
e
-
>
c
u
r
r
e
n
c
y
c
o
d
e
,
 
f
a
l
s
e
,
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
L
I
_
I
N
I
T
_
T
O
T
A
L
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
l
i
[
 
'
i
n
i
t
_
t
o
t
a
l
'
 
]
,
 
$
i
n
v
o
i
c
e
-
>
c
u
r
r
e
n
c
y
c
o
d
e
,
 
f
a
l
s
e
,
 
t
r
u
e
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
i
n
v
o
i
c
e
-
>
v
a
t
_
w
i
l
l
_
b
e
_
c
h
a
r
g
e
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
L
I
_
I
N
I
T
_
T
O
T
A
L
_
I
N
C
L
U
S
I
V
E
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
l
i
[
 
'
i
n
i
t
_
t
o
t
a
l
_
i
n
c
l
u
s
i
v
e
'
 
]
,
 
$
i
n
v
o
i
c
e
-
>
c
u
r
r
e
n
c
y
c
o
d
e
,
 
f
a
l
s
e
,
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
L
I
_
T
A
X
_
R
A
T
E
'
 
]
 
=
 
$
l
i
[
 
'
t
a
x
_
r
a
t
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
L
I
_
I
N
I
T
_
T
O
T
A
L
_
I
N
C
L
U
S
I
V
E
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
l
i
[
 
'
i
n
i
t
_
t
o
t
a
l
'
 
]
,
 
$
i
n
v
o
i
c
e
-
>
c
u
r
r
e
n
c
y
c
o
d
e
,
 
f
a
l
s
e
,
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
L
I
_
T
A
X
_
R
A
T
E
'
 
]
 
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
L
I
_
T
A
X
_
C
O
D
E
'
 
]
 
=
 
$
l
i
[
 
'
t
a
x
_
c
o
d
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
L
I
_
T
A
X
_
D
E
S
C
R
I
P
T
I
O
N
'
 
]
 
=
 
$
l
i
[
 
'
t
a
x
_
d
e
s
c
r
i
p
t
i
o
n
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
L
I
_
T
A
X
_
A
M
O
U
N
T
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
l
i
[
 
'
t
a
x
_
a
m
o
u
n
t
'
 
]
,
 
$
i
n
v
o
i
c
e
-
>
c
u
r
r
e
n
c
y
c
o
d
e
,
 
f
a
l
s
e
,
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
L
I
_
I
N
V
_
I
D
'
 
]
 
=
 
$
l
i
[
 
'
i
n
v
_
i
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
C
U
R
R
E
N
C
Y
C
O
D
E
'
 
]
 
=
 
$
i
n
v
o
i
c
e
-
>
c
u
r
r
e
n
c
y
c
o
d
e
;

	
	
	
	
$
r
[
 
'
T
R
A
N
S
A
C
T
I
O
N
_
I
D
'
 
]
 
=
 
$
l
i
[
 
'
t
r
a
n
s
a
c
t
i
o
n
_
i
d
'
 
]
;

	
	
	
	
$
r
[
 
'
P
A
Y
M
E
N
T
_
M
E
T
H
O
D
'
 
]
 
=
 
$
l
i
[
 
'
p
a
y
m
e
n
t
_
m
e
t
h
o
d
'
 
]
;

	
	
	
	

	
	
	
	
$
r
[
 
'
M
A
N
A
G
E
M
E
N
T
_
U
R
L
'
 
]
 
=
 
'
'
;

	
	
	
	
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
I
s
M
a
n
a
g
e
r
)

	
	
	
	
	
$
r
[
 
'
M
A
N
A
G
E
M
E
N
T
_
U
R
L
'
 
]
 
=
 
$
l
i
[
 
'
m
a
n
a
g
e
m
e
n
t
_
u
r
l
'
 
]
;

	
	
	
	

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
l
i
[
 
'
i
s
_
p
a
y
m
e
n
t
'
 
]
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
w
s
[
]
 
=
 
$
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
r
a
n
s
a
c
t
i
o
n
_
r
o
w
s
[
]
 
=
 
$
r
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
J
O
M
R
E
S
_
G
R
A
N
D
T
O
T
A
L
_
T
O
T
A
L
_
T
A
X
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
J
O
M
R
E
S
_
G
R
A
N
D
T
O
T
A
L
_
T
O
T
A
L
_
T
A
X
'
,
 
'
J
O
M
R
E
S
_
G
R
A
N
D
T
O
T
A
L
_
T
O
T
A
L
_
T
A
X
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
J
O
M
R
E
S
_
G
R
A
N
D
T
O
T
A
L
_
E
X
_
T
A
X
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
J
O
M
R
E
S
_
G
R
A
N
D
T
O
T
A
L
_
E
X
_
T
A
X
'
,
 
'
J
O
M
R
E
S
_
G
R
A
N
D
T
O
T
A
L
_
E
X
_
T
A
X
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
J
O
M
R
E
S
_
G
R
A
N
D
T
O
T
A
L
_
I
N
C
_
T
A
X
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
J
O
M
R
E
S
_
G
R
A
N
D
T
O
T
A
L
_
I
N
C
_
T
A
X
'
,
 
'
J
O
M
R
E
S
_
G
R
A
N
D
T
O
T
A
L
_
I
N
C
_
T
A
X
'
)
;


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
G
R
A
N
D
_
T
O
T
A
L
_
I
N
C
_
T
A
X
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
i
n
v
o
i
c
e
-
>
g
r
a
n
d
_
t
o
t
a
l
_
i
n
c
_
t
a
x
,
 
$
i
n
v
o
i
c
e
-
>
c
u
r
r
e
n
c
y
c
o
d
e
,
 
f
a
l
s
e
,
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
G
R
A
N
D
_
T
O
T
A
L
_
E
X
_
T
A
X
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
i
n
v
o
i
c
e
-
>
g
r
a
n
d
_
t
o
t
a
l
_
e
x
_
t
a
x
,
 
$
i
n
v
o
i
c
e
-
>
c
u
r
r
e
n
c
y
c
o
d
e
,
 
f
a
l
s
e
,
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
G
R
A
N
D
_
T
O
T
A
L
_
T
A
X
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
i
n
v
o
i
c
e
-
>
g
r
a
n
d
_
t
o
t
a
l
_
t
a
x
,
 
$
i
n
v
o
i
c
e
-
>
c
u
r
r
e
n
c
y
c
o
d
e
,
 
f
a
l
s
e
,
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
O
U
T
S
T
A
N
D
I
N
G
_
T
O
T
A
L
'
 
]
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
i
n
v
o
i
c
e
-
>
b
a
l
a
n
c
e
,
 
$
i
n
v
o
i
c
e
-
>
c
u
r
r
e
n
c
y
c
o
d
e
,
 
f
a
l
s
e
,
 
t
r
u
e
)
;

	
	

	
	
/
/
i
n
v
o
i
c
e
 
l
o
g
o

	
	
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
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
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
'
)
;

	
	

	
	
$
o
u
t
p
u
t
[
 
'
L
O
G
O
'
 
]
 
=
 
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
m
u
l
t
i
_
q
u
e
r
y
_
i
m
a
g
e
s
 
[
 
'
n
o
i
m
a
g
e
-
s
m
a
l
l
'
 
]
;

	
	

	
	
/
/
b
o
o
k
i
n
g
 
i
n
v
o
i
c
e
s

	
	
i
f
 
(
(
i
n
t
)
 
$
i
n
v
o
i
c
e
-
>
c
o
n
t
r
a
c
t
_
i
d
 
>
 
0
)
 
{

	
	
	
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
g
e
t
_
i
m
a
g
e
s
(
$
i
n
v
o
i
c
e
-
>
p
r
o
p
e
r
t
y
_
u
i
d
,
 
a
r
r
a
y
(
'
p
r
o
p
e
r
t
y
_
l
o
g
o
'
)
)
;

	
	
	
i
f
 
(
 
i
s
s
e
t
(
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
i
m
a
g
e
s
 
[
'
p
r
o
p
e
r
t
y
_
l
o
g
o
'
]
 
[
0
]
)
)
{

	
	
	
	
f
o
r
e
a
c
h
 
(
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
i
m
a
g
e
s
 
[
'
p
r
o
p
e
r
t
y
_
l
o
g
o
'
]
 
[
0
]
 
a
s
 
$
i
m
a
g
e
)
 
{

	
	
	
	
	
$
o
u
t
p
u
t
[
 
'
L
O
G
O
'
 
]
 
=
 
$
i
m
a
g
e
[
'
s
m
a
l
l
'
]
;

	
	
	
	
}

	
	
	
}


	
	
}
 
e
l
s
e
 
{
 
/
/
c
o
m
m
i
s
s
i
o
n
 
a
n
d
 
s
u
b
s
c
r
i
p
t
i
o
n
 
i
n
v
o
i
c
e
s

	
	
	
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
g
e
t
_
s
i
t
e
_
i
m
a
g
e
s
(
'
l
o
g
o
'
)
;


	
	
	
f
o
r
e
a
c
h
 
(
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
-
>
s
i
t
e
_
i
m
a
g
e
s
[
'
l
o
g
o
'
]
 
a
s
 
$
i
m
a
g
e
)
 
{

	
	
	
	
$
o
u
t
p
u
t
[
 
'
L
O
G
O
'
 
]
 
=
 
$
i
m
a
g
e
[
'
s
m
a
l
l
'
]
;

	
	
	
}

	
	
}


 
 
 
 
 
 
 
 
$
p
a
g
e
o
u
t
p
u
t
[
 
]
 
=
 
$
o
u
t
p
u
t
;

 
 
 
 
 
 
 
 
$
t
m
p
l
 
=
 
n
e
w
 
p
a
t
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
s
e
t
R
o
o
t
(
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
P
A
T
H
_
F
R
O
N
T
E
N
D
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
p
o
p
u
p
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
p
r
i
n
t
a
b
l
e
_
i
n
v
o
i
c
e
.
h
t
m
l
'
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
i
f
(
$
l
i
n
e
_
i
t
e
m
s
_
o
n
l
y
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
f
r
o
n
t
e
n
d
_
v
i
e
w
_
i
n
v
o
i
c
e
_
l
i
n
e
i
t
e
m
s
.
h
t
m
l
'
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

	
	
	
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
f
r
o
n
t
e
n
d
_
v
i
e
w
_
i
n
v
o
i
c
e
.
h
t
m
l
'
)
;

	
	
}


 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
p
a
g
e
o
u
t
p
u
t
'
,
 
$
p
a
g
e
o
u
t
p
u
t
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
r
o
w
s
'
,
 
$
r
o
w
s
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
t
r
a
n
s
a
c
t
i
o
n
_
r
o
w
s
'
,
 
$
t
r
a
n
s
a
c
t
i
o
n
_
r
o
w
s
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
m
a
r
k
a
s
p
a
i
d
_
l
i
n
k
'
,
 
$
m
a
r
k
a
s
p
a
i
d
_
l
i
n
k
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
m
a
r
k
a
s
p
e
n
d
i
n
g
_
l
i
n
k
'
,
 
$
m
a
r
k
a
s
p
e
n
d
i
n
g
_
l
i
n
k
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
v
i
e
w
b
o
o
k
i
n
g
_
l
i
n
k
'
,
 
$
v
i
e
w
b
o
o
k
i
n
g
_
l
i
n
k
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
i
n
v
o
i
c
e
-
>
i
n
i
t
_
t
o
t
a
l
 
>
 
0
.
0
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
i
m
m
e
d
i
a
t
e
_
p
a
y
'
,
 
$
i
m
m
e
d
i
a
t
e
_
p
a
y
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
o
u
t
p
u
t
_
n
o
w
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
d
i
s
p
l
a
y
P
a
r
s
e
d
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
V
a
l
s
 
=
 
$
t
m
p
l
-
>
g
e
t
P
a
r
s
e
d
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
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
 
t
o
u
c
h
_
t
e
m
p
l
a
t
e
_
l
a
n
g
u
a
g
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
C
O
M
_
I
N
V
O
I
C
E
_
P
R
I
N
T
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
I
N
V
O
I
C
E
_
P
R
I
N
T
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
C
O
M
_
I
N
V
O
I
C
E
_
T
I
T
L
E
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
I
N
V
O
I
C
E
_
T
I
T
L
E
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
T
I
T
L
E
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
T
I
T
L
E
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
R
A
I
S
E
D
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
R
A
I
S
E
D
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
D
U
E
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
D
U
E
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
U
B
S
C
R
I
P
T
I
O
N
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
U
B
S
C
R
I
P
T
I
O
N
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
I
N
I
T
T
O
T
A
L
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
I
N
I
T
T
O
T
A
L
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
C
U
R
R
E
N
C
Y
C
O
D
E
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
C
U
R
R
E
N
C
Y
C
O
D
E
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
V
O
I
C
E
_
N
U
M
B
E
R
'
,
 
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
V
O
I
C
E
_
N
U
M
B
E
R
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
U
S
E
R
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
U
S
E
R
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
N
A
M
E
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
N
A
M
E
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
D
E
S
C
R
I
P
T
I
O
N
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
D
E
S
C
R
I
P
T
I
O
N
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
C
U
R
R
E
N
C
Y
C
O
D
E
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
C
U
R
R
E
N
C
Y
C
O
D
E
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
I
N
I
T
_
P
R
I
C
E
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
I
N
I
T
_
P
R
I
C
E
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
I
N
I
T
_
Q
T
Y
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
I
N
I
T
_
Q
T
Y
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
I
N
I
T
_
D
I
S
C
O
U
N
T
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
I
N
I
T
_
D
I
S
C
O
U
N
T
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
I
N
I
T
_
T
O
T
A
L
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
I
N
I
T
_
T
O
T
A
L
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
T
A
X
_
D
E
S
C
R
I
P
T
I
O
N
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
T
A
X
_
D
E
S
C
R
I
P
T
I
O
N
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
T
A
X
_
C
O
D
E
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
T
A
X
_
C
O
D
E
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
T
A
X
_
R
A
T
E
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
T
A
X
_
R
A
T
E
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
U
N
P
A
I
D
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
U
N
P
A
I
D
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
P
A
I
D
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
P
A
I
D
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
C
A
N
C
E
L
L
E
D
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
C
A
N
C
E
L
L
E
D
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
P
E
N
D
I
N
G
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
S
T
A
T
U
S
_
P
E
N
D
I
N
G
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
V
O
I
C
E
_
M
A
R
K
A
S
P
A
I
D
'
,
 
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
V
O
I
C
E
_
M
A
R
K
A
S
P
A
I
D
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
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
V
O
I
C
E
_
M
A
R
K
E
D
A
S
P
A
I
D
'
,
 
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
V
O
I
C
E
_
M
A
R
K
E
D
A
S
P
A
I
D
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
C
O
M
P
_
M
Y
U
S
E
R
_
V
I
E
W
B
O
O
K
I
N
G
'
,
 
'
_
J
O
M
C
O
M
P
_
M
Y
U
S
E
R
_
V
I
E
W
B
O
O
K
I
N
G
'
)
;


 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
o
u
t
p
u
t
 
a
s
 
$
o
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
o
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
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
V
a
l
s
;

 
 
 
 
}

}

