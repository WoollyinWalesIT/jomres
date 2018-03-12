
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
7
 
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
o
m
r
e
s
_
i
n
s
t
a
l
l

{

	
p
r
o
t
e
c
t
e
d
 
$
m
e
s
s
a
g
e
s
;

	

	
p
r
o
t
e
c
t
e
d
 
$
a
c
t
i
o
n
;

	

	
p
r
o
t
e
c
t
e
d
 
$
t
r
a
s
h
t
a
b
l
e
s
;

	

	
p
r
o
t
e
c
t
e
d
 
$
l
e
g
a
c
y
;

	

	
p
r
o
t
e
c
t
e
d
 
$
s
i
t
e
C
o
n
f
i
g
;

	

	
p
r
o
t
e
c
t
e
d
 
$
j
r
C
o
n
f
i
g
;

	

	
p
r
o
t
e
c
t
e
d
 
$
f
i
l
e
s
y
s
t
e
m
;

	

	
p
r
o
t
e
c
t
e
d
 
$
a
l
l
o
w
e
d
_
i
m
a
g
e
_
e
x
t
e
n
s
i
o
n
s
;

	

	
p
r
o
t
e
c
t
e
d
 
$
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
_
r
e
g
i
s
t
r
y
;


	
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
a
c
t
i
o
n
 
=
 
'
i
n
s
t
a
l
l
'
,
 
$
t
r
a
s
h
t
a
b
l
e
s
 
=
 
f
a
l
s
e
,
 
$
l
e
g
a
c
y
 
=
 
f
a
l
s
e
)

 
 
 
 
{

	
	
/
/
f
i
r
s
t
 
l
e
t
`
s
 
c
h
e
c
k
 
t
h
e
 
p
h
p
 
v
e
r
s
i
o
n

	
	
i
f
 
(
v
e
r
s
i
o
n
_
c
o
m
p
a
r
e
(
p
h
p
v
e
r
s
i
o
n
(
)
,
 
'
5
.
6
'
,
 
'
<
'
)
)
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
M
e
s
s
a
g
e
(
'
O
o
p
s
,
 
i
t
 
l
o
o
k
s
 
l
i
k
e
 
y
o
u
`
r
e
 
r
u
n
n
i
n
g
 
a
 
v
e
r
s
i
o
n
 
o
f
 
P
H
P
 
l
o
w
e
r
 
t
h
a
n
 
5
.
6
.
 
J
o
m
r
e
s
 
r
e
q
u
i
r
e
s
 
a
t
 
l
e
a
s
t
 
P
H
P
 
5
.
6
 
a
n
d
 
w
i
l
l
 
n
o
t
 
r
u
n
 
o
n
 
e
a
r
l
i
e
r
 
v
e
r
s
i
o
n
s
'
,
 
'
d
a
n
g
e
r
'
)
;


	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}


	
	
d
e
f
i
n
e
(
'
A
U
T
O
_
U
P
G
R
A
D
E
'
,
 
1
)
;
 
/
/
T
O
D
O
:
 
r
e
n
a
m
e
 
t
h
i
s

	
	

	
	
/
/
d
e
f
i
n
e
(
'
P
R
O
D
_
D
E
V
'
,
 
'
d
e
v
e
l
o
p
m
e
n
t
'
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
P
R
O
D
_
D
E
V
'
,
 
'
p
r
o
d
u
c
t
i
o
n
'
)
;

	
	

	
	
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
J
R
D
S
'
)
)
 
{

	
	
	
d
e
f
i
n
e
(
'
J
R
D
S
'
,
 
D
I
R
E
C
T
O
R
Y
_
S
E
P
A
R
A
T
O
R
)
;

	
	
}


	
	
/
/
a
c
t
i
o
n
s
 
c
a
n
 
b
e
 
i
n
s
t
a
l
l
,
 
u
n
i
n
s
t
a
l
l
,
 
u
p
d
a
t
e

	
	
$
t
h
i
s
-
>
a
c
t
i
o
n
 
=
 
$
a
c
t
i
o
n
;

	
	

	
	
/
/
t
r
a
s
h
 
t
a
b
l
e
s
 
o
n
 
u
n
i
n
s
t
a
l
l
 
o
r
 
n
o
t

	
	
$
t
h
i
s
-
>
t
r
a
s
h
t
a
b
l
e
s
 
=
 
$
t
r
a
s
h
t
a
b
l
e
s
;

	
	

	
	
/
/
p
e
r
f
o
r
m
 
l
e
g
a
c
y
 
u
p
d
a
t
e
 
r
o
u
t
i
n
e
s

	
	
$
t
h
i
s
-
>
l
e
g
a
c
y
 
=
 
$
l
e
g
a
c
y
;

	
	

	
	
/
/
a
l
l
o
w
e
d
 
i
m
a
g
e
 
f
i
l
e
 
e
x
t
e
n
s
i
o
n
s

	
	
/
/
t
h
i
s
 
i
s
 
u
s
e
d
 
w
h
e
n
 
c
o
p
y
i
n
g
 
f
i
l
e
s
 
f
r
o
m
 
j
o
m
r
e
s
 
c
o
r
e
 
i
m
a
g
e
s
 
d
i
r
 
t
o
 
u
p
l
o
a
d
e
d
i
m
a
g
e
s
 
d
i
r
,
 
s
o
 
w
e
 
c
a
n
 
s
k
i
p
 
i
n
d
e
x
.
h
t
m
l
,
 
o
r
 
f
i
l
e
s
 
o
f
 
s
o
m
e
 
o
t
h
e
r
 
t
y
p
e
s

	
	
$
t
h
i
s
-
>
a
l
l
o
w
e
d
_
i
m
a
g
e
_
e
x
t
e
n
s
i
o
n
s
 
=
 
a
r
r
a
y
(
'
j
p
g
'
,
 
'
j
p
e
g
'
,
 
'
g
i
f
'
,
 
'
p
n
g
'
)
;

	
	

	
	
/
/
m
e
s
s
a
g
e
s
 
a
r
r
a
y

	
	
$
t
h
i
s
-
>
m
e
s
s
a
g
e
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

	
	

	
	
/
/
c
r
e
a
t
e
 
j
o
m
r
e
s
 
r
o
o
t
 
d
i
r
 
f
i
l
e
 
(
i
f
 
d
o
e
s
n
`
t
 
e
x
i
s
t
)
 
a
n
d
 
d
e
f
i
n
e
 
j
o
m
r
e
s
 
r
o
o
t
 
d
i
r

	
	
/
/
i
f
 
w
e
 
u
n
i
n
s
t
a
l
l
 
i
t
 
w
i
l
l
 
b
e
 
d
e
l
e
t
e
d
 
l
a
t
e
r

	
	
$
t
h
i
s
-
>
c
r
e
a
t
e
J
o
m
r
e
s
R
o
o
t
D
i
r
F
i
l
e
(
)
;

	
	

	
	
/
/
j
o
m
r
e
s
 
i
n
t
e
g
r
a
t
i
o
n
.
p
h
p
,
 
s
o
 
w
e
 
c
a
n
 
u
s
e
 
j
o
m
r
e
s
 
f
e
a
t
u
r
e
s

	
	
r
e
q
u
i
r
e
_
o
n
c
e
 
_
_
D
I
R
_
_
 
.
 
 
'
/
.
.
/
.
.
/
.
.
/
i
n
t
e
g
r
a
t
i
o
n
.
p
h
p
'
;

	
	

	
	
/
/
j
o
m
r
e
s
 
s
i
t
e
 
c
o
n
f
i
g

	
	
$
t
h
i
s
-
>
s
i
t
e
C
o
n
f
i
g
 
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
c
o
n
f
i
g
_
s
i
t
e
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
'
)
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
j
r
C
o
n
f
i
g
 
=
 
$
t
h
i
s
-
>
s
i
t
e
C
o
n
f
i
g
-
>
g
e
t
(
)
;


	
	
/
/
t
r
a
s
h
t
a
b
l
e
s
 
c
a
n
 
b
e
 
t
r
u
e
 
(
d
r
o
p
 
a
l
l
 
j
o
m
r
e
s
 
t
a
b
l
e
s
)
 
o
r
 
f
a
l
s
e
 
(
k
e
e
p
 
t
a
b
l
e
s
 
w
h
e
n
 
u
n
i
n
s
t
a
l
l
i
n
g
)

	
	
i
f
 
(
$
t
h
i
s
-
>
j
r
C
o
n
f
i
g
[
'
d
e
l
e
t
e
_
a
l
l
_
d
a
t
a
_
o
n
_
u
n
i
n
s
t
a
l
l
'
]
 
=
=
 
'
1
'
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
r
a
s
h
t
a
b
l
e
s
 
=
 
t
r
u
e
;

	
	
}

	
	

	
	
/
/
j
o
m
r
e
s
 
f
i
l
e
s
y
s
t
e
m

	
	
/
/
m
o
u
n
t
 
t
h
e
 
s
i
t
e
 
r
o
o
t
 
d
i
r
,
 
n
o
t
 
t
h
e
 
j
o
m
r
e
s
 
d
i
r
,
 
s
o
 
w
e
 
c
a
n
 
h
a
v
e
 
a
c
c
e
s
s
 
t
o
 
j
o
m
r
e
s
_
r
o
o
t
.
p
h
p
 
f
i
l
e
 
i
f
 
w
e
 
n
e
e
d
 
t
o
 
c
r
e
a
t
e
 
o
r
 
d
e
l
e
t
e
 
i
t

	
	
$
t
h
i
s
-
>
f
i
l
e
s
y
s
t
e
m
 
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
f
i
l
e
s
y
s
t
e
m
'
,
 
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
)
-
>
g
e
t
F
i
l
e
s
y
s
t
e
m
(
)
;

	
	

	
	
/
/
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
 
r
e
g
i
s
t
r
y

	
	
$
t
h
i
s
-
>
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
_
r
e
g
i
s
t
r
y
 
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
_
r
e
g
i
s
t
r
y
'
)
;

	
	

	
	
/
/
j
o
m
r
e
s
 
v
e
r
s
i
o
n
 
c
h
e
c
k
s
,
 
t
o
 
d
o
u
b
l
e
 
c
h
e
c
k
 
t
h
e
 
i
n
s
t
a
l
l
e
r
 
a
c
t
i
o
n

	
	
i
f
 
(
!
$
t
h
i
s
-
>
c
h
e
c
k
J
o
m
r
e
s
V
e
r
s
i
o
n
(
)
)
 
{

	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}


	
	
/
/
i
t
`
s
 
s
h
o
w
t
i
m
e

	
	
s
w
i
t
c
h
 
(
$
t
h
i
s
-
>
a
c
t
i
o
n
)
 
{

	
	
	
c
a
s
e
 
'
i
n
s
t
a
l
l
'
:

	
	
	
	
$
t
h
i
s
-
>
i
n
s
t
a
l
l
(
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
 
'
u
p
d
a
t
e
'
:

	
	
	
	
$
t
h
i
s
-
>
u
p
d
a
t
e
(
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
 
'
u
n
i
n
s
t
a
l
l
'
:

	
	
	
	
$
t
h
i
s
-
>
u
n
i
n
s
t
a
l
l
(
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

	
	
	
	
b
r
e
a
k
;

	
	
}

 
 
 
 
}

	

	
/
/
j
o
m
r
e
s
 
v
e
r
s
i
o
n
 
c
h
e
c
k
s
,
 
t
o
 
d
o
u
b
l
e
 
c
h
e
c
k
 
t
h
e
 
i
n
s
t
a
l
l
e
r
 
a
c
t
i
o
n

	
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
c
h
e
c
k
J
o
m
r
e
s
V
e
r
s
i
o
n
(
)

	
{

	
	
/
/
i
f
 
w
e
 
u
n
i
n
s
t
a
l
l
,
 
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
 
t
r
u
e

	
	
i
f
 
(
$
t
h
i
s
-
>
a
c
t
i
o
n
 
=
=
 
'
u
n
i
n
s
t
a
l
l
'
)
 
{

	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
}


	
	
/
/
B
C
:
 
i
f
 
J
o
m
r
e
s
 
d
b
 
v
e
r
s
i
o
n
 
i
s
 
0
 
(
v
e
r
s
i
o
n
s
 
o
l
d
e
r
 
t
h
a
n
 
9
.
1
0
.
0
 
d
o
n
`
t
 
h
a
v
e
 
t
h
i
s
 
s
e
t
t
i
n
g
)
,
 
J
o
m
r
e
s
 
i
s
 
e
i
t
h
e
r
 
n
o
t
 
i
n
s
t
a
l
l
e
d
,
 
o
r
 
a
n
 
u
p
d
a
t
e
 
f
r
o
m
 
a
 
v
e
r
s
i
o
n
 
o
l
d
e
r
 
t
h
a
n
 
9
.
1
0
.
0
 
(
w
h
e
n
 
t
h
e
 
n
e
w
 
i
n
s
t
a
l
l
e
r
 
w
a
s
 
i
n
t
r
o
d
u
c
e
d
)

	
	
i
f
 
(
$
t
h
i
s
-
>
j
r
C
o
n
f
i
g
[
'
j
o
m
r
e
s
_
d
b
_
v
e
r
s
i
o
n
'
]
 
=
=
 
'
0
'
)
 
{
 
/
/
t
r
i
g
g
e
r
s
 
o
n
l
y
 
o
n
 
u
p
d
a
t
e
s
 
f
r
o
m
 
o
l
d
e
r
 
v
e
r
s
i
o
n
s
 
t
h
a
n
 
9
.
1
0
.
0
 
w
h
e
n
 
t
h
i
s
 
s
e
t
t
i
n
g
 
w
a
s
 
i
n
t
r
o
d
u
c
e
d
.

	
	
	
i
f
 
(
$
t
h
i
s
-
>
j
o
m
r
e
s
T
a
b
l
e
s
E
x
i
s
t
(
)
)
 
{

	
	
	
	
$
t
h
i
s
-
>
a
c
t
i
o
n
 
=
 
'
u
p
d
a
t
e
'
;

	
	
	
	

	
	
	
	
/
/
p
e
r
f
o
r
m
 
l
e
g
a
c
y
 
u
p
d
a
t
e
 
r
o
u
t
i
n
e
s
 
t
o
o

	
	
	
	
$
t
h
i
s
-
>
l
e
g
a
c
y
 
=
 
t
r
u
e
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
a
c
t
i
o
n
 
=
 
'
i
n
s
t
a
l
l
'
;

	
	
	
}

	
	
	

	
	
	
r
e
t
u
r
n
 
t
r
u
e
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
e
 
n
e
w
 
w
a
y

	
	
	
/
/
f
i
l
e
 
v
e
r
s
i
o
n
 
i
s
 
h
i
g
h
e
r
 
t
h
a
n
 
t
h
e
 
d
b
 
v
e
r
s
i
o
n
,
 
p
e
r
f
o
r
m
 
u
p
d
a
t
e
 
r
o
u
t
i
n
e
s

	
	
	
i
f
 
(
v
e
r
s
i
o
n
_
c
o
m
p
a
r
e
(
$
t
h
i
s
-
>
j
r
C
o
n
f
i
g
[
'
v
e
r
s
i
o
n
'
]
,
 
$
t
h
i
s
-
>
j
r
C
o
n
f
i
g
[
'
j
o
m
r
e
s
_
d
b
_
v
e
r
s
i
o
n
'
]
,
 
'
>
'
)
)
 
{

	
	
	
	

	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
j
o
m
r
e
s
T
a
b
l
e
s
E
x
i
s
t
(
)
)
 
{

	
	
	
	
	
/
/
j
o
m
r
e
s
 
t
a
b
l
e
s
 
e
x
i
s
t
,
 
p
e
r
f
o
r
m
 
u
p
d
a
t
e

	
	
	
	
	
$
t
h
i
s
-
>
a
c
t
i
o
n
 
=
 
'
u
p
d
a
t
e
'
;

	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
/
/
u
n
u
s
u
a
l
 
c
a
s
e
 
w
h
e
n
 
f
i
l
e
s
 
e
x
i
s
t
 
b
u
t
 
d
b
 
t
a
b
l
e
s
 
a
r
e
 
n
o
t

	
	
	
	
	
$
t
h
i
s
-
>
a
c
t
i
o
n
 
=
 
'
i
n
s
t
a
l
l
'
;

	
	
	
	
}

	
	
	
	

	
	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
	
}


	
	
	
/
/
f
i
l
e
 
v
e
r
s
i
o
n
 
i
s
 
l
o
w
e
r
 
t
h
a
n
 
t
h
e
 
d
b
 
v
e
r
s
i
o
n
,
 
t
h
i
s
 
i
s
 
a
n
 
e
r
r
o
r
,
 
s
o
 
d
o
 
n
o
t
h
i
n
g
 
a
n
d
 
b
e
t
t
e
r
 
a
s
k
 
f
o
r
 
s
u
p
p
o
r
t

	
	
	
/
/
T
O
D
O
:
 
m
a
y
b
e
 
j
u
s
t
 
u
p
d
a
t
e
 
a
n
d
 
b
e
 
d
o
n
e
 
w
i
t
h
 
i
t
?
 
t
h
e
 
c
o
d
e
 
i
s
 
h
e
r
e
,
 
j
u
s
t
 
r
e
p
l
a
c
e
 
a
c
t
i
o
n
s

	
	
	
i
f
 
(
v
e
r
s
i
o
n
_
c
o
m
p
a
r
e
(
$
t
h
i
s
-
>
j
r
C
o
n
f
i
g
[
'
v
e
r
s
i
o
n
'
]
,
 
$
t
h
i
s
-
>
j
r
C
o
n
f
i
g
[
'
j
o
m
r
e
s
_
d
b
_
v
e
r
s
i
o
n
'
]
,
 
'
<
'
)
)
 
{

	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
j
o
m
r
e
s
T
a
b
l
e
s
E
x
i
s
t
(
)
)
 
{

	
	
	
	
	
/
/
j
o
m
r
e
s
 
t
a
b
l
e
s
 
e
x
i
s
t
,
 
p
e
r
f
o
r
m
 
u
p
d
a
t
e

	
	
	
	
	
$
t
h
i
s
-
>
a
c
t
i
o
n
 
=
 
'
d
o
n
o
t
h
i
n
g
'
;

	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
/
/
u
n
u
s
u
a
l
 
c
a
s
e
 
w
h
e
n
 
f
i
l
e
s
 
e
x
i
s
t
 
b
u
t
 
d
b
 
t
a
b
l
e
s
 
a
r
e
 
n
o
t

	
	
	
	
	
$
t
h
i
s
-
>
a
c
t
i
o
n
 
=
 
'
d
o
n
o
t
h
i
n
g
'
;

	
	
	
	
}

	
	
	
	

	
	
	
	
$
t
h
i
s
-
>
s
e
t
M
e
s
s
a
g
e
(
'
E
r
r
o
r
,
 
y
o
u
r
 
J
o
m
r
e
s
 
p
l
u
g
i
n
 
v
e
r
s
i
o
n
 
i
s
 
l
o
w
e
r
 
t
h
a
n
 
t
h
e
 
J
o
m
r
e
s
 
d
a
t
a
b
a
s
e
 
v
e
r
s
i
o
n
,
 
a
r
e
 
y
o
u
 
s
u
r
e
 
y
o
u
`
r
e
 
n
o
t
 
d
o
w
n
g
r
a
d
i
n
g
?
'
,
 
'
d
a
n
g
e
r
'
)
;

	
	
	
	

	
	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
	
}


	
	
	
/
/
i
f
 
v
e
r
s
i
o
n
s
 
m
a
t
c
h
 
j
u
s
t
 
r
u
n
 
u
p
d
a
t
e
 
r
o
u
t
i
n
e
s
 
a
g
a
i
n

	
	
	
i
f
 
(
v
e
r
s
i
o
n
_
c
o
m
p
a
r
e
(
$
t
h
i
s
-
>
j
r
C
o
n
f
i
g
[
'
v
e
r
s
i
o
n
'
]
,
 
$
t
h
i
s
-
>
j
r
C
o
n
f
i
g
[
'
j
o
m
r
e
s
_
d
b
_
v
e
r
s
i
o
n
'
]
,
 
'
=
'
)
)
 
{

	
	
	
	
i
f
 
(
$
t
h
i
s
-
>
j
o
m
r
e
s
T
a
b
l
e
s
E
x
i
s
t
(
)
)
 
{

	
	
	
	
	
/
/
j
o
m
r
e
s
 
t
a
b
l
e
s
 
e
x
i
s
t
,
 
p
e
r
f
o
r
m
 
u
p
d
a
t
e

	
	
	
	
	
$
t
h
i
s
-
>
a
c
t
i
o
n
 
=
 
'
u
p
d
a
t
e
'
;

	
	
	
	
}
 
e
l
s
e
 
{

	
	
	
	
	
/
/
u
n
u
s
u
a
l
 
c
a
s
e
 
w
h
e
n
 
f
i
l
e
s
 
e
x
i
s
t
 
b
u
t
 
d
b
 
t
a
b
l
e
s
 
a
r
e
 
n
o
t

	
	
	
	
	
$
t
h
i
s
-
>
a
c
t
i
o
n
 
=
 
'
i
n
s
t
a
l
l
'
;

	
	
	
	
}

	
	
	
}

	
	
}

	
	

	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
}

	

	
/
/
c
h
e
c
k
 
i
f
 
j
o
m
r
e
s
 
i
s
 
i
n
s
t
a
l
l
e
d
 
b
y
 
t
r
y
i
n
g
 
t
o
 
s
e
l
e
c
t
 
d
a
t
a
 
f
r
o
m
 
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
p
r
o
p
e
r
t
y
s
 
t
a
b
l
e

	
/
/
i
f
 
d
b
 
t
a
b
l
e
s
 
e
x
i
s
t
,
 
i
t
 
m
e
a
n
s
 
j
o
m
r
e
s
 
i
s
 
i
n
s
t
a
l
l
e
d
 
o
r
 
w
a
s
 
i
n
s
t
a
l
l
e
d
 
p
r
e
v
i
o
u
s
l
y

	
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
j
o
m
r
e
s
T
a
b
l
e
s
E
x
i
s
t
(
)

	
{

	
	
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
`
t
a
b
l
e
_
n
a
m
e
`
 
F
R
O
M
 
i
n
f
o
r
m
a
t
i
o
n
_
s
c
h
e
m
a
.
t
a
b
l
e
s
 
W
H
E
R
E
 

	
	
	
	
	
`
t
a
b
l
e
_
s
c
h
e
m
a
`
 
=
 
'
"
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
d
b
'
)
.
"
'

	
	
	
	
	
A
N
D
 
(
`
t
a
b
l
e
_
n
a
m
e
`
 
L
I
K
E
 
'
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
%
'
 

	
	
	
	
	
O
R
 
`
t
a
b
l
e
_
n
a
m
e
`
 
L
I
K
E
 
'
#
_
_
j
o
m
c
o
m
p
_
%
'
 

	
	
	
	
	
O
R
 
`
t
a
b
l
e
_
n
a
m
e
`
 
L
I
K
E
 
'
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
%
'
)
 
"
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
e
m
p
t
y
(
$
r
e
s
u
l
t
)
)
 
{

	
	
	
/
/
j
o
m
r
e
s
 
t
a
b
l
e
s
 
d
o
n
`
t
 
e
x
i
s
t

	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}

	
	

	
	
/
/
j
o
m
r
e
s
 
t
a
b
l
e
s
 
e
x
i
s
t

	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
}

	

	
/
/
f
r
e
s
h
 
i
n
s
t
a
l
l
s

	
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
i
n
s
t
a
l
l
(
)

	
{

	
	
t
r
y
 
{

	
	
	
/
/
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
 
p
r
e
-
i
n
s
t
a
l
l
a
t
i
o
n

	
	
	
i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
(
_
J
O
M
R
E
S
_
D
E
T
E
C
T
E
D
_
C
M
S
_
S
P
E
C
I
F
I
C
_
F
I
L
E
S
.
'
c
m
s
_
s
p
e
c
i
f
i
c
_
p
r
e
_
i
n
s
t
a
l
l
a
t
i
o
n
.
p
h
p
'
)
)
 
{

	
	
	
	
i
n
c
l
u
d
e
 
_
J
O
M
R
E
S
_
D
E
T
E
C
T
E
D
_
C
M
S
_
S
P
E
C
I
F
I
C
_
F
I
L
E
S
.
'
c
m
s
_
s
p
e
c
i
f
i
c
_
p
r
e
_
i
n
s
t
a
l
l
a
t
i
o
n
.
p
h
p
'
;

	
	
	
}

	
	
	

	
	
	
/
/
s
a
v
e
 
i
n
i
t
i
a
l
 
c
o
n
f
i
g
u
r
a
t
i
o
n
.
p
h
p

	
	
	
$
t
h
i
s
-
>
s
i
t
e
C
o
n
f
i
g
-
>
s
a
v
e
_
c
o
n
f
i
g
(
)
;

	
	
	

	
	
	
/
/
c
h
e
c
k
 
a
n
d
 
c
r
e
a
t
e
 
d
i
r
s
 
i
f
 
n
e
c
e
s
s
a
r
y

	
	
	
$
t
h
i
s
-
>
c
r
e
a
t
e
D
i
r
s
(
)
;

	
	
	

	
	
	
/
/
c
o
p
y
 
s
a
m
p
l
e
 
i
m
a
g
e
s
 
a
n
d
 
i
c
o
n
s

	
	
	
$
t
h
i
s
-
>
c
o
p
y
S
a
m
p
l
e
I
m
a
g
e
s
(
)
;

	
	
	

	
	
	
/
/
c
r
e
a
t
e
 
d
b
 
t
a
b
l
e
s

	
	
	
$
t
h
i
s
-
>
c
r
e
a
t
e
D
e
f
a
u
l
t
D
b
T
a
b
l
e
s
(
)
;

	
	
	

	
	
	
/
/
r
e
b
u
i
l
d
 
r
e
g
i
s
t
r
y
 
b
e
f
o
r
e
 
s
e
e
d
i
n
g
 
c
o
n
t
e
n
t

	
	
	
/
/
i
m
p
o
r
t
i
n
g
 
i
m
a
g
e
s
 
t
o
 
d
b
 
r
e
q
u
i
r
e
s
 
t
h
e
 
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
 
r
e
g
i
s
t
r
y
 
t
o
 
d
i
s
c
o
v
e
r
 
r
e
s
o
u
r
c
e
 
t
y
p
e
s

	
	
	
$
t
h
i
s
-
>
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
_
r
e
g
i
s
t
r
y
-
>
r
e
g
e
n
e
r
a
t
e
_
r
e
g
i
s
t
r
y
(
)
;

	
	
	

	
	
	
/
/
r
e
m
o
v
e
 
o
b
s
o
l
e
t
e
 
f
i
l
e
s

	
	
	
$
t
h
i
s
-
>
r
e
m
o
v
e
_
o
b
s
o
l
e
t
e
_
f
i
l
e
s
(
)
;

	
	
	

	
	
	
/
/
s
e
e
d
 
d
e
f
a
u
l
t
/
d
e
m
o
 
c
o
n
t
e
n
t

	
	
	
$
t
h
i
s
-
>
s
e
e
d
D
e
f
a
u
l
t
C
o
n
t
e
n
t
(
)
;

	
	
	

	
	
	
/
/
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
 
i
n
s
t
a
l
l
a
t
i
o
n

	
	
	
i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
(
_
J
O
M
R
E
S
_
D
E
T
E
C
T
E
D
_
C
M
S
_
S
P
E
C
I
F
I
C
_
F
I
L
E
S
.
'
c
m
s
_
s
p
e
c
i
f
i
c
_
i
n
s
t
a
l
l
a
t
i
o
n
.
p
h
p
'
)
)
 
{

	
	
	
	
i
n
c
l
u
d
e
 
_
J
O
M
R
E
S
_
D
E
T
E
C
T
E
D
_
C
M
S
_
S
P
E
C
I
F
I
C
_
F
I
L
E
S
.
'
c
m
s
_
s
p
e
c
i
f
i
c
_
i
n
s
t
a
l
l
a
t
i
o
n
.
p
h
p
'
;

	
	
	
}

	
	
	

	
	
	
/
/
r
u
n
 
p
l
u
g
i
n
s
 
i
n
s
t
a
l
l
a
t
i
o
n
 
s
c
r
i
p
t
s

	
	
	
$
t
h
i
s
-
>
i
n
s
t
a
l
l
P
l
u
g
i
n
s
(
)
;

	
	
	

	
	
	
/
/
s
e
t
 
t
o
 
p
r
o
d
u
c
t
i
o
n

	
	
	
$
t
h
i
s
-
>
s
i
t
e
C
o
n
f
i
g
-
>
u
p
d
a
t
e
_
s
e
t
t
i
n
g
(
'
d
e
v
e
l
o
p
m
e
n
t
_
p
r
o
d
u
c
t
i
o
n
'
,
 
P
R
O
D
_
D
E
V
)
;

	
	
	

	
	
	
/
/
u
p
d
a
t
e
 
d
b
 
v
e
r
s
i
o
n
 
s
o
 
w
e
 
c
a
n
 
c
h
e
c
k
 
t
h
i
s
 
o
n
 
f
u
t
u
r
e
 
u
p
d
a
t
e
s
 
o
r
 
d
b
 
s
a
n
i
t
y
 
c
h
e
c
k

	
	
	
i
f
 
(
e
m
p
t
y
(
$
t
h
i
s
-
>
m
e
s
s
a
g
e
s
)
)
 
{

	
	
	
	
$
t
h
i
s
-
>
s
i
t
e
C
o
n
f
i
g
-
>
u
p
d
a
t
e
_
s
e
t
t
i
n
g
(
'
j
o
m
r
e
s
_
d
b
_
v
e
r
s
i
o
n
'
,
 
$
t
h
i
s
-
>
j
r
C
o
n
f
i
g
[
'
v
e
r
s
i
o
n
'
]
)
;

	
	
	
}

	
	
}

	
	
c
a
t
c
h
 
(
E
x
c
e
p
t
i
o
n
 
$
e
)
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
M
e
s
s
a
g
e
(
$
e
-
>
g
e
t
M
e
s
s
a
g
e
(
)
,
 
'
d
a
n
g
e
r
'
)
;

	
	
	

	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}

	
}

	

	
/
/
u
p
d
a
t
e
 
e
x
i
s
t
i
n
g
 
i
n
s
t
a
l
l
a
t
i
o
n

	
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
u
p
d
a
t
e
(
)

	
{

	
	
t
r
y
 
{

	
	
	
/
/
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
 
p
r
e
-
i
n
s
t
a
l
l
a
t
i
o
n

	
	
	
i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
(
_
J
O
M
R
E
S
_
D
E
T
E
C
T
E
D
_
C
M
S
_
S
P
E
C
I
F
I
C
_
F
I
L
E
S
.
'
c
m
s
_
s
p
e
c
i
f
i
c
_
p
r
e
_
i
n
s
t
a
l
l
a
t
i
o
n
.
p
h
p
'
)
)
 
{

	
	
	
	
i
n
c
l
u
d
e
 
_
J
O
M
R
E
S
_
D
E
T
E
C
T
E
D
_
C
M
S
_
S
P
E
C
I
F
I
C
_
F
I
L
E
S
.
'
c
m
s
_
s
p
e
c
i
f
i
c
_
p
r
e
_
i
n
s
t
a
l
l
a
t
i
o
n
.
p
h
p
'
;

	
	
	
}

	
	
	

	
	
	
/
/
s
a
v
e
 
i
n
i
t
i
a
l
 
c
o
n
f
i
g
u
r
a
t
i
o
n
.
p
h
p

	
	
	
/
/
t
h
i
s
 
f
i
l
e
 
i
s
 
a
l
r
e
a
d
y
 
c
r
e
a
t
e
d
 
f
r
o
m
 
w
h
e
n
 
i
n
s
t
a
l
l
i
n
g
 
J
o
m
r
e
s
,
 
b
u
t
 
w
e
`
l
l
 
j
u
s
t
 
s
a
v
e
 
i
t
 
a
g
a
i
n
 
t
o
 
b
e
 
s
u
r
e

	
	
	
$
t
h
i
s
-
>
s
i
t
e
C
o
n
f
i
g
-
>
s
a
v
e
_
c
o
n
f
i
g
(
)
;

	
	
	

	
	
	
/
/
c
h
e
c
k
 
a
n
d
 
c
r
e
a
t
e
 
d
i
r
s
 
i
f
 
n
e
c
e
s
s
a
r
y

	
	
	
/
/
t
h
e
y
 
w
e
r
e
 
a
l
r
e
a
d
y
 
c
r
e
a
t
e
d
 
w
h
e
n
 
i
n
s
t
a
l
l
i
n
g
 
t
h
e
 
f
i
r
s
t
 
t
i
m
e
,
 
b
u
t
 
l
e
t
`
s
 
d
o
u
b
l
e
 
c
h
e
c
k

	
	
	
$
t
h
i
s
-
>
c
r
e
a
t
e
D
i
r
s
(
)
;

	
	
	

	
	
	
/
/
c
r
e
a
t
e
 
d
e
f
a
u
l
t
 
d
b
 
t
a
b
l
e
s

	
	
	
/
/
t
a
b
l
e
s
 
s
h
o
u
l
d
 
a
l
r
e
a
d
y
 
e
x
i
s
t
,
 
s
o
 
m
o
s
t
 
p
r
o
b
a
b
l
y
 
t
h
e
y
 
w
o
n
`
t
 
n
e
e
d
 
t
o
 
b
e
 
c
r
e
a
t
e
d
 
a
g
a
i
n

	
	
	
$
t
h
i
s
-
>
c
r
e
a
t
e
D
e
f
a
u
l
t
D
b
T
a
b
l
e
s
(
)
;

	
	
	

	
	
	
/
/
r
e
b
u
i
l
d
 
r
e
g
i
s
t
r
y
 
b
e
f
o
r
e
 
s
e
e
d
i
n
g
 
c
o
n
t
e
n
t

	
	
	
/
/
i
m
p
o
r
t
i
n
g
 
i
m
a
g
e
s
 
t
o
 
d
b
 
r
e
q
u
i
r
e
s
 
t
h
e
 
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
 
r
e
g
i
s
t
r
y
 
t
o
 
d
i
s
c
o
v
e
r
 
r
e
s
o
u
r
c
e
 
t
y
p
e
s

	
	
	
$
t
h
i
s
-
>
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
_
r
e
g
i
s
t
r
y
-
>
r
e
g
e
n
e
r
a
t
e
_
r
e
g
i
s
t
r
y
(
)
;

	
	
	

	
	
	
/
/
r
e
m
o
v
e
 
o
b
s
o
l
e
t
e
 
f
i
l
e
s

	
	
	
$
t
h
i
s
-
>
r
e
m
o
v
e
_
o
b
s
o
l
e
t
e
_
f
i
l
e
s
(
)
;

	
	
	

	
	
	
/
/
r
u
n
 
l
e
g
a
c
y
 
u
p
d
a
t
e
 
r
o
u
t
i
n
e
s

	
	
	
/
/
t
h
e
s
e
 
a
r
e
 
e
x
e
c
u
t
e
d
 
i
f
 
w
e
`
r
e
 
u
p
d
a
t
i
n
g
 
f
r
o
m
 
a
 
J
o
m
r
e
s
 
v
e
r
s
i
o
n
 
l
o
w
e
r
 
t
h
a
n
 
9
.
1
0
.
0

	
	
	
i
f
 
(
$
t
h
i
s
-
>
l
e
g
a
c
y
)
 
{

	
	
	
	
$
t
h
i
s
-
>
r
u
n
L
e
g
a
c
y
U
p
d
a
t
e
s
(
)
;

	
	
	
}


	
	
	
/
/
r
u
n
 
u
p
d
a
t
e
 
r
o
u
t
i
n
e
s

	
	
	
$
t
h
i
s
-
>
r
u
n
U
p
d
a
t
e
s
(
)
;

	
	
	

	
	
	
/
/
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
 
u
p
d
a
t
e

	
	
	
i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
(
_
J
O
M
R
E
S
_
D
E
T
E
C
T
E
D
_
C
M
S
_
S
P
E
C
I
F
I
C
_
F
I
L
E
S
.
'
c
m
s
_
s
p
e
c
i
f
i
c
_
u
p
g
r
a
d
e
.
p
h
p
'
)
)
 
{

	
	
	
	
i
n
c
l
u
d
e
 
_
J
O
M
R
E
S
_
D
E
T
E
C
T
E
D
_
C
M
S
_
S
P
E
C
I
F
I
C
_
F
I
L
E
S
.
'
c
m
s
_
s
p
e
c
i
f
i
c
_
u
p
g
r
a
d
e
.
p
h
p
'
;

	
	
	
}

	
	
	

	
	
	
/
/
r
u
n
 
p
l
u
g
i
n
s
 
i
n
s
t
a
l
l
a
t
i
o
n
 
s
c
r
i
p
t
s

	
	
	
/
/
p
l
u
g
i
n
s
 
s
h
o
u
l
d
 
a
l
r
e
a
d
y
 
b
e
 
i
n
s
t
a
l
l
e
d
,
 
s
o
 
m
o
s
t
 
p
r
o
b
a
b
l
y
 
t
h
e
i
r
 
t
a
b
l
e
s
 
w
o
n
`
t
 
n
e
e
d
 
t
o
 
b
e
 
c
r
e
a
t
e
d
 
a
g
a
i
n

	
	
	
$
t
h
i
s
-
>
i
n
s
t
a
l
l
P
l
u
g
i
n
s
(
)
;

	
	
	

	
	
	
/
/
s
e
t
 
t
o
 
p
r
o
d
u
c
t
i
o
n

	
	
	
$
t
h
i
s
-
>
s
i
t
e
C
o
n
f
i
g
-
>
u
p
d
a
t
e
_
s
e
t
t
i
n
g
(
'
d
e
v
e
l
o
p
m
e
n
t
_
p
r
o
d
u
c
t
i
o
n
'
,
 
P
R
O
D
_
D
E
V
)
;

	
	
	

	
	
	
/
/
u
p
d
a
t
e
 
d
b
 
v
e
r
s
i
o
n
 
s
o
 
w
e
 
c
a
n
 
c
h
e
c
k
 
t
h
i
s
 
o
n
 
f
u
t
u
r
e
 
u
p
d
a
t
e
s
 
o
r
 
s
a
n
i
t
y
 
c
h
e
c
k
s

	
	
	
i
f
 
(
e
m
p
t
y
(
$
t
h
i
s
-
>
m
e
s
s
a
g
e
s
)
)
 
{

	
	
	
	
$
t
h
i
s
-
>
s
i
t
e
C
o
n
f
i
g
-
>
u
p
d
a
t
e
_
s
e
t
t
i
n
g
(
'
j
o
m
r
e
s
_
d
b
_
v
e
r
s
i
o
n
'
,
 
$
t
h
i
s
-
>
j
r
C
o
n
f
i
g
[
'
v
e
r
s
i
o
n
'
]
)
;

	
	
	
}

	
	
}
 

	
	
c
a
t
c
h
 
(
E
x
c
e
p
t
i
o
n
 
$
e
)
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
M
e
s
s
a
g
e
(
$
e
-
>
g
e
t
M
e
s
s
a
g
e
(
)
,
 
'
d
a
n
g
e
r
'
)
;

	
	
	

	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}

	
}

	

	
/
/
u
n
i
n
s
t
a
l
l
 
a
c
t
i
o
n

	
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
u
n
i
n
s
t
a
l
l
(
)

	
{

	
	
t
r
y
 
{

	
	
	
i
f
 
(
!
$
t
h
i
s
-
>
t
r
a
s
h
t
a
b
l
e
s
)
 
{

	
	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
	
}

	
	
	

	
	
	
/
/
d
r
o
p
 
a
l
l
 
j
o
m
r
e
s
 
t
a
b
l
e
s

	
	
	
$
t
h
i
s
-
>
d
r
o
p
D
b
T
a
b
l
e
s
(
)
;

	
	
	

	
	
	
/
/
d
e
l
e
t
e
 
t
h
e
 
j
o
m
r
e
s
 
d
i
r

	
	
	
$
t
h
i
s
-
>
d
e
l
e
t
e
F
i
l
e
s
(
)
;

	
	
	

	
	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
	
}
 

	
	
c
a
t
c
h
 
(
E
x
c
e
p
t
i
o
n
 
$
e
)
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
M
e
s
s
a
g
e
(
$
e
-
>
g
e
t
M
e
s
s
a
g
e
(
)
,
 
'
d
a
n
g
e
r
'
)
;

	
	
	

	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}

	
}

	

	
/
/
c
r
e
a
t
e
 
j
o
m
r
e
s
 
r
o
o
t
 
d
i
r
 
f
i
l
e
 
a
n
d
 
d
e
f
i
n
e
 
j
o
m
r
e
s
 
r
o
o
t
 
d
i
r

	
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
c
r
e
a
t
e
J
o
m
r
e
s
R
o
o
t
D
i
r
F
i
l
e
(
)

	
{

	
	
$
p
a
t
h
 
=
 
d
i
r
n
a
m
e
(
d
i
r
n
a
m
e
(
d
i
r
n
a
m
e
(
d
i
r
n
a
m
e
(
_
_
F
I
L
E
_
_
)
)
)
)
;

	
	
$
d
i
r
 
=
 
b
a
s
e
n
a
m
e
(
$
p
a
t
h
)
;

	
	
$
d
i
r
 
=
 
b
a
s
e
n
a
m
e
(
$
d
i
r
)
;


	
	
$
f
i
l
e
_
c
o
n
t
e
n
t
s
 
=
 
"
<
?
p
h
p

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
'
)
)
 
{

	
d
e
f
i
n
e
(
'
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
'
 
,
 
'
"
.
$
d
i
r
.
"
'
)
;

}

"
;

	
	
i
f
 
(
!
f
i
l
e
_
e
x
i
s
t
s
(
d
i
r
n
a
m
e
(
$
p
a
t
h
)
 
.
 
'
/
j
o
m
r
e
s
_
r
o
o
t
.
p
h
p
'
)
)
 
{

	
	
	
@
f
i
l
e
_
p
u
t
_
c
o
n
t
e
n
t
s
(
d
i
r
n
a
m
e
(
$
p
a
t
h
)
 
.
 
'
/
j
o
m
r
e
s
_
r
o
o
t
.
p
h
p
'
,
 
$
f
i
l
e
_
c
o
n
t
e
n
t
s
)
;

	
	
}


	
	
i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
(
d
i
r
n
a
m
e
(
$
p
a
t
h
)
 
.
 
'
/
j
o
m
r
e
s
_
r
o
o
t
.
p
h
p
'
)
)
 
{

	
	
	
r
e
q
u
i
r
e
_
o
n
c
e
(
d
i
r
n
a
m
e
(
$
p
a
t
h
)
 
.
 
'
/
j
o
m
r
e
s
_
r
o
o
t
.
p
h
p
'
)
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
'
)
)
 
{

	
	
	
d
e
f
i
n
e
(
'
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
'
,
 
'
j
o
m
r
e
s
'
)
;

	
	
}


	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
}


	
/
/
c
h
e
c
k
 
a
n
d
 
c
r
e
a
t
e
 
j
o
m
r
e
s
 
d
i
r
s

 
 
 
 
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
c
r
e
a
t
e
D
i
r
s
(
)

 
 
 
 
{

	
	
/
/
s
e
s
s
i
o
n
s
 
d
i
r

	
	
i
f
 
(
!
i
s
_
d
i
r
(
J
O
M
R
E
S
_
S
E
S
S
I
O
N
S
_
A
B
S
P
A
T
H
)
)
 
{

	
	
	
i
f
 
(
!
@
m
k
d
i
r
(
J
O
M
R
E
S
_
S
E
S
S
I
O
N
S
_
A
B
S
P
A
T
H
)
)
 
{

	
	
	
	
$
t
h
i
s
-
>
s
e
t
M
e
s
s
a
g
e
(
'
E
r
r
o
r
,
 
u
n
a
b
l
e
 
t
o
 
m
a
k
e
 
f
o
l
d
e
r
 
'
.
J
O
M
R
E
S
_
S
E
S
S
I
O
N
S
_
A
B
S
P
A
T
H
.
"
 
a
u
t
o
m
a
t
i
c
a
l
l
y
 
t
h
e
r
e
f
o
r
e
 
c
a
n
n
o
t
 
s
t
o
r
e
 
b
o
o
k
i
n
g
 
s
e
s
s
i
o
n
 
d
a
t
a
.
 
P
l
e
a
s
e
 
c
r
e
a
t
e
 
t
h
e
 
f
o
l
d
e
r
 
m
a
n
u
a
l
l
y
 
a
n
d
 
e
n
s
u
r
e
 
t
h
a
t
 
i
t
'
s
 
w
r
i
t
a
b
l
e
 
b
y
 
t
h
e
 
w
e
b
 
s
e
r
v
e
r
.
"
,
 
'
d
a
n
g
e
r
'
)
;

	
	
	
}

	
	
}


	
	
/
/
t
e
m
p
 
d
i
r

	
	
i
f
 
(
!
i
s
_
d
i
r
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
_
A
B
S
P
A
T
H
)
)
 
{

	
	
	
i
f
 
(
!
@
m
k
d
i
r
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
_
A
B
S
P
A
T
H
)
)
 
{

	
	
	
	
$
t
h
i
s
-
>
s
e
t
M
e
s
s
a
g
e
(
'
E
r
r
o
r
,
 
u
n
a
b
l
e
 
t
o
 
m
a
k
e
 
f
o
l
d
e
r
 
'
.
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
_
A
B
S
P
A
T
H
.
"
 
a
u
t
o
m
a
t
i
c
a
l
l
y
 
t
h
e
r
e
f
o
r
e
 
c
a
n
n
o
t
 
s
t
o
r
e
 
b
o
o
k
i
n
g
 
s
e
s
s
i
o
n
 
d
a
t
a
.
 
P
l
e
a
s
e
 
c
r
e
a
t
e
 
t
h
e
 
f
o
l
d
e
r
 
m
a
n
u
a
l
l
y
 
a
n
d
 
e
n
s
u
r
e
 
t
h
a
t
 
i
t
'
s
 
w
r
i
t
a
b
l
e
 
b
y
 
t
h
e
 
w
e
b
 
s
e
r
v
e
r
.
"
,
 
'
d
a
n
g
e
r
'
)
;

	
	
	
}

	
	
}


	
	
/
/
c
a
c
h
e
 
d
i
r

	
	
i
f
 
(
!
i
s
_
d
i
r
(
J
O
M
R
E
S
_
C
A
C
H
E
_
A
B
S
P
A
T
H
)
)
 
{

	
	
	
i
f
 
(
!
@
m
k
d
i
r
(
J
O
M
R
E
S
_
C
A
C
H
E
_
A
B
S
P
A
T
H
)
)
 
{

	
	
	
	
$
t
h
i
s
-
>
s
e
t
M
e
s
s
a
g
e
(
'
E
r
r
o
r
,
 
u
n
a
b
l
e
 
t
o
 
m
a
k
e
 
f
o
l
d
e
r
 
'
.
J
O
M
R
E
S
_
C
A
C
H
E
_
A
B
S
P
A
T
H
.
"
 
a
u
t
o
m
a
t
i
c
a
l
l
y
 
t
h
e
r
e
f
o
r
e
 
c
a
n
n
o
t
 
s
t
o
r
e
 
b
o
o
k
i
n
g
 
s
e
s
s
i
o
n
 
d
a
t
a
.
 
P
l
e
a
s
e
 
c
r
e
a
t
e
 
t
h
e
 
f
o
l
d
e
r
 
m
a
n
u
a
l
l
y
 
a
n
d
 
e
n
s
u
r
e
 
t
h
a
t
 
i
t
'
s
 
w
r
i
t
a
b
l
e
 
b
y
 
t
h
e
 
w
e
b
 
s
e
r
v
e
r
.
"
,
 
'
d
a
n
g
e
r
'
)
;

	
	
	
}

	
	
}


	
	
/
/
u
p
d
a
t
e
s
 
d
i
r

	
	
i
f
 
(
!
i
s
_
d
i
r
(
J
O
M
R
E
S
_
U
P
D
A
T
E
S
_
A
B
S
P
A
T
H
)
)
 
{

	
	
	
i
f
 
(
!
@
m
k
d
i
r
(
J
O
M
R
E
S
_
U
P
D
A
T
E
S
_
A
B
S
P
A
T
H
)
)
 
{

	
	
	
	
$
t
h
i
s
-
>
s
e
t
M
e
s
s
a
g
e
(
'
E
r
r
o
r
,
 
u
n
a
b
l
e
 
t
o
 
m
a
k
e
 
f
o
l
d
e
r
 
'
.
J
O
M
R
E
S
_
U
P
D
A
T
E
S
_
A
B
S
P
A
T
H
.
"
 
a
u
t
o
m
a
t
i
c
a
l
l
y
 
t
h
e
r
e
f
o
r
e
 
c
a
n
n
o
t
 
i
n
s
t
a
l
l
 
p
l
u
g
i
n
s
.
 
P
l
e
a
s
e
 
c
r
e
a
t
e
 
t
h
e
 
f
o
l
d
e
r
 
m
a
n
u
a
l
l
y
 
a
n
d
 
e
n
s
u
r
e
 
t
h
a
t
 
i
t
'
s
 
w
r
i
t
a
b
l
e
 
b
y
 
t
h
e
 
w
e
b
 
s
e
r
v
e
r
.
"
,
 
'
d
a
n
g
e
r
'
)
;

	
	
	
}

	
	
}

	
	

	
	
/
/
c
o
r
e
 
p
l
u
g
i
n
s
 
d
i
r

	
	
i
f
 
(
!
i
s
_
d
i
r
(
J
O
M
R
E
S
_
C
O
R
E
P
L
U
G
I
N
S
_
A
B
S
P
A
T
H
)
)
 
{

	
	
	
i
f
 
(
!
@
m
k
d
i
r
(
J
O
M
R
E
S
_
C
O
R
E
P
L
U
G
I
N
S
_
A
B
S
P
A
T
H
)
)
 
{

	
	
	
	
$
t
h
i
s
-
>
s
e
t
M
e
s
s
a
g
e
(
'
E
r
r
o
r
,
 
u
n
a
b
l
e
 
t
o
 
m
a
k
e
 
f
o
l
d
e
r
 
'
.
'
c
o
r
e
-
p
l
u
g
i
n
s
'
.
J
O
M
R
E
S
_
C
O
R
E
P
L
U
G
I
N
S
_
A
B
S
P
A
T
H
.
"
 
a
u
t
o
m
a
t
i
c
a
l
l
y
 
t
h
e
r
e
f
o
r
e
 
c
a
n
n
o
t
 
i
n
s
t
a
l
l
 
p
l
u
g
i
n
s
.
 
P
l
e
a
s
e
 
c
r
e
a
t
e
 
t
h
e
 
f
o
l
d
e
r
 
m
a
n
u
a
l
l
y
 
a
n
d
 
e
n
s
u
r
e
 
t
h
a
t
 
i
t
'
s
 
w
r
i
t
a
b
l
e
 
b
y
 
t
h
e
 
w
e
b
 
s
e
r
v
e
r
.
"
,
 
'
d
a
n
g
e
r
'
)
;

	
	
	
}

	
	
}


	
	
/
/
r
e
m
o
t
e
_
p
l
u
g
i
n
s
 
d
i
r

	
	
i
f
 
(
!
i
s
_
d
i
r
(
J
O
M
R
E
S
_
R
E
M
O
T
E
P
L
U
G
I
N
S
_
A
B
S
P
A
T
H
)
)
 
{

	
	
	
i
f
 
(
!
@
m
k
d
i
r
(
J
O
M
R
E
S
_
R
E
M
O
T
E
P
L
U
G
I
N
S
_
A
B
S
P
A
T
H
)
)
 
{

	
	
	
	
$
t
h
i
s
-
>
s
e
t
M
e
s
s
a
g
e
(
'
E
r
r
o
r
,
 
u
n
a
b
l
e
 
t
o
 
m
a
k
e
 
f
o
l
d
e
r
 
'
.
'
r
e
m
o
t
e
_
p
l
u
g
i
n
s
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
E
M
O
T
E
P
L
U
G
I
N
S
_
A
B
S
P
A
T
H
.
"
 
a
u
t
o
m
a
t
i
c
a
l
l
y
 
t
h
e
r
e
f
o
r
e
 
c
a
n
n
o
t
 
i
n
s
t
a
l
l
 
p
l
u
g
i
n
s
.
 
P
l
e
a
s
e
 
c
r
e
a
t
e
 
t
h
e
 
f
o
l
d
e
r
 
m
a
n
u
a
l
l
y
 
a
n
d
 
e
n
s
u
r
e
 
t
h
a
t
 
i
t
'
s
 
w
r
i
t
a
b
l
e
 
b
y
 
t
h
e
 
w
e
b
 
s
e
r
v
e
r
.
"
,
 
'
d
a
n
g
e
r
'
)
;

	
	
	
}

	
	
}


	
	
/
/
u
p
l
o
a
d
e
d
i
m
a
g
e
s
 
d
i
r

	
	
i
f
 
(
!
i
s
_
d
i
r
(
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
)
)
 
{

	
	
	
i
f
 
(
!
@
m
k
d
i
r
(
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
)
)
 
{

	
	
	
	
$
t
h
i
s
-
>
s
e
t
M
e
s
s
a
g
e
(
'
E
r
r
o
r
,
 
u
n
a
b
l
e
 
t
o
 
m
a
k
e
 
f
o
l
d
e
r
 
'
.
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
.
"
 
a
u
t
o
m
a
t
i
c
a
l
l
y
 
t
h
e
r
e
f
o
r
e
 
c
a
n
n
o
t
 
u
p
l
o
a
d
 
i
m
a
g
e
s
.
 
P
l
e
a
s
e
 
c
r
e
a
t
e
 
t
h
e
 
f
o
l
d
e
r
 
m
a
n
u
a
l
l
y
 
a
n
d
 
e
n
s
u
r
e
 
t
h
a
t
 
i
t
'
s
 
w
r
i
t
a
b
l
e
 
b
y
 
t
h
e
 
w
e
b
 
s
e
r
v
e
r
.
"
,
 
'
d
a
n
g
e
r
'
)
;

	
	
	
}

	
	
}

	
	

	
	
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}

	

	
/
/
c
r
e
a
t
e
 
f
r
e
s
h
 
i
n
s
t
a
l
l
 
d
b
 
t
a
b
l
e
s

	
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
c
r
e
a
t
e
D
e
f
a
u
l
t
D
b
T
a
b
l
e
s
(
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
g
l
o
b
(
J
O
M
R
E
S
P
A
T
H
_
B
A
S
E
.
'
d
a
t
a
b
a
s
e
'
.
J
R
D
S
.
'
t
a
b
l
e
s
'
.
J
R
D
S
.
'
*
.
p
h
p
'
)
 
a
s
 
$
f
i
l
e
n
a
m
e
)
 
{

	
	
	
i
n
c
l
u
d
e
 
$
f
i
l
e
n
a
m
e
;

	
	
}

	
}

	

	
/
/
s
e
e
d
 
f
r
e
s
h
 
i
n
s
t
a
l
l
 
t
a
l
e
s
 
w
i
t
h
 
d
e
f
a
u
l
t
 
c
o
n
t
e
n
t

	
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
s
e
e
d
D
e
f
a
u
l
t
C
o
n
t
e
n
t
(
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
g
l
o
b
(
J
O
M
R
E
S
P
A
T
H
_
B
A
S
E
.
'
d
a
t
a
b
a
s
e
'
.
J
R
D
S
.
'
s
e
e
d
s
'
.
J
R
D
S
.
'
*
.
p
h
p
'
)
 
a
s
 
$
f
i
l
e
n
a
m
e
)
 
{

	
	
	
i
n
c
l
u
d
e
 
$
f
i
l
e
n
a
m
e
;

	
	
}

	
}

	

	
/
/
r
u
n
 
a
l
l
 
p
l
u
g
i
n
s
 
i
n
s
t
a
l
l
a
t
i
o
n
 
s
c
r
i
p
t
s

	
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
i
n
s
t
a
l
l
P
l
u
g
i
n
s
(
)

	
{

	
	
/
/
n
e
e
d
e
d
 
b
y
 
p
l
u
g
i
n
 
i
n
s
t
a
l
l
a
t
i
o
n
 
s
c
r
i
p
t
s
 
t
o
 
a
l
l
o
w
 
e
x
e
c
u
t
i
o
n

	
	
d
e
f
i
n
e
(
'
J
O
M
R
E
S
_
I
N
S
T
A
L
L
E
R
'
,
 
1
)
;

	
	

	
	
/
/
s
e
a
r
c
h
 
a
l
l
 
c
o
r
e
-
p
l
u
g
i
n
s
 
a
n
d
 
r
u
n
 
t
h
e
i
r
 
i
n
s
t
a
l
l
a
t
i
o
n
 
s
c
r
i
p
t
s

	
	
f
o
r
e
a
c
h
 
(
g
l
o
b
(
J
O
M
R
E
S
P
A
T
H
_
B
A
S
E
.
'
c
o
r
e
-
p
l
u
g
i
n
s
'
.
J
R
D
S
.
'
*
'
,
 
G
L
O
B
_
O
N
L
Y
D
I
R
)
 
a
s
 
$
d
i
r
)
 
{

	
	
	
i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
(
$
d
i
r
.
J
R
D
S
.
'
p
l
u
g
i
n
_
i
n
s
t
a
l
l
.
p
h
p
'
)
)
 
{

	
	
	
	
i
n
c
l
u
d
e
 
$
d
i
r
.
J
R
D
S
.
'
p
l
u
g
i
n
_
i
n
s
t
a
l
l
.
p
h
p
'
;

	
	
	
}

	
	
}

	
	

	
	
/
/
s
e
a
r
c
h
 
a
l
l
 
c
o
r
e
-
p
l
u
g
i
n
s
 
a
n
d
 
r
u
n
 
t
h
e
i
r
 
i
n
s
t
a
l
l
a
t
i
o
n
 
s
c
r
i
p
t
s

	
	
f
o
r
e
a
c
h
 
(
g
l
o
b
(
J
O
M
R
E
S
P
A
T
H
_
B
A
S
E
.
'
r
e
m
o
t
e
_
p
l
u
g
i
n
s
'
.
J
R
D
S
.
'
*
'
,
 
G
L
O
B
_
O
N
L
Y
D
I
R
)
 
a
s
 
$
d
i
r
)
 
{

	
	
	
i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
(
$
d
i
r
.
J
R
D
S
.
'
p
l
u
g
i
n
_
i
n
s
t
a
l
l
.
p
h
p
'
)
)
 
{

	
	
	
	
i
n
c
l
u
d
e
 
$
d
i
r
.
J
R
D
S
.
'
p
l
u
g
i
n
_
i
n
s
t
a
l
l
.
p
h
p
'
;

	
	
	
}

	
	
}

	
}

	

	
/
/
u
p
d
a
t
e
 
r
o
u
t
i
n
e
s

	
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
r
u
n
U
p
d
a
t
e
s
(
)

	
{

	
	
/
/
s
e
a
r
c
h
 
a
l
l
 
u
p
d
a
t
e
 
d
i
r
s
,
 
c
o
m
p
a
r
e
 
t
h
e
i
r
 
n
a
m
e
s
 
w
i
t
h
 
t
h
e
 
j
o
m
r
e
s
_
d
b
_
v
e
r
s
i
o
n
 
(
l
a
t
e
s
t
 
v
e
r
s
i
o
n
 
t
o
 
w
h
i
c
h
 
w
a
s
 
u
p
d
a
t
e
d
)
 
a
n
d
 
i
f
 
t
h
e
r
e
 
a
r
e
 
n
e
w
 
v
e
r
s
i
o
n
s
,
 
p
e
r
f
o
r
m
 
u
p
d
a
t
e
s

	
	
f
o
r
e
a
c
h
 
(
g
l
o
b
(
J
O
M
R
E
S
P
A
T
H
_
B
A
S
E
.
'
d
a
t
a
b
a
s
e
'
.
J
R
D
S
.
'
u
p
d
a
t
e
s
'
.
J
R
D
S
.
'
*
'
,
 
G
L
O
B
_
O
N
L
Y
D
I
R
)
 
a
s
 
$
d
i
r
)
 
{

	
	
	
i
f
 
(
v
e
r
s
i
o
n
_
c
o
m
p
a
r
e
(
b
a
s
e
n
a
m
e
(
$
d
i
r
)
,
 
$
t
h
i
s
-
>
j
r
C
o
n
f
i
g
[
'
j
o
m
r
e
s
_
d
b
_
v
e
r
s
i
o
n
'
]
,
 
'
>
'
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
g
l
o
b
(
$
d
i
r
.
J
R
D
S
.
'
*
.
p
h
p
'
)
 
a
s
 
$
f
i
l
e
n
a
m
e
)
 
{

	
	
	
	
	
i
n
c
l
u
d
e
 
$
f
i
l
e
n
a
m
e
;

	
	
	
	
}

	
	
	
}

	
	
}

	
}

	

	
/
/
l
e
g
a
c
y
 
u
p
d
a
t
e
 
r
o
u
t
i
n
e
s

	
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
r
u
n
L
e
g
a
c
y
U
p
d
a
t
e
s
(
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
g
l
o
b
(
J
O
M
R
E
S
P
A
T
H
_
B
A
S
E
.
'
d
a
t
a
b
a
s
e
'
.
J
R
D
S
.
'
l
e
g
a
c
y
'
.
J
R
D
S
.
'
*
.
p
h
p
'
)
 
a
s
 
$
f
i
l
e
n
a
m
e
)
 
{

	
	
	
i
n
c
l
u
d
e
 
$
f
i
l
e
n
a
m
e
;

	
	
}

	
}

	

	
/
/
c
o
p
y
 
s
a
m
p
l
e
 
i
m
a
g
e
s
 
o
n
 
f
r
e
s
h
 
i
n
s
t
a
l
l
s

	
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
c
o
p
y
S
a
m
p
l
e
I
m
a
g
e
s
(
)

	
{

	
	
/
/
c
o
p
y
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
i
c
o
n
s

	
	
i
f
 
(
!
$
t
h
i
s
-
>
p
e
r
f
o
r
m
C
o
p
y
(
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
a
s
s
e
t
s
/
i
m
a
g
e
s
/
i
c
o
n
s
/
p
f
e
a
t
u
r
e
s
/
'
,
 
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
u
p
l
o
a
d
e
d
i
m
a
g
e
s
/
p
f
e
a
t
u
r
e
s
/
'
)
)
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
M
e
s
s
a
g
e
(
'
E
r
r
o
r
,
 
u
n
a
b
l
e
 
t
o
 
c
o
p
y
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
i
c
o
n
s
'
,
 
'
d
a
n
g
e
r
'
)
;

	
	
}

	
	

	
	
i
f
 
(
!
$
t
h
i
s
-
>
p
e
r
f
o
r
m
C
o
p
y
(
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
a
s
s
e
t
s
/
i
m
a
g
e
s
/
i
c
o
n
s
/
p
f
e
a
t
u
r
e
s
/
'
,
 
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
u
p
l
o
a
d
e
d
i
m
a
g
e
s
/
p
f
e
a
t
u
r
e
s
/
m
e
d
i
u
m
/
'
)
)
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
M
e
s
s
a
g
e
(
'
E
r
r
o
r
,
 
u
n
a
b
l
e
 
t
o
 
c
o
p
y
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
m
e
d
i
u
m
 
i
c
o
n
s
'
,
 
'
d
a
n
g
e
r
'
)
;

	
	
}

	
	

	
	
i
f
 
(
!
$
t
h
i
s
-
>
p
e
r
f
o
r
m
C
o
p
y
(
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
a
s
s
e
t
s
/
i
m
a
g
e
s
/
i
c
o
n
s
/
p
f
e
a
t
u
r
e
s
/
'
,
 
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
u
p
l
o
a
d
e
d
i
m
a
g
e
s
/
p
f
e
a
t
u
r
e
s
/
t
h
u
m
b
n
a
i
l
/
'
)
)
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
M
e
s
s
a
g
e
(
'
E
r
r
o
r
,
 
u
n
a
b
l
e
 
t
o
 
c
o
p
y
 
p
r
o
p
e
r
t
y
 
f
e
a
t
u
r
e
 
t
h
u
m
b
n
a
i
l
 
i
c
o
n
s
'
,
 
'
d
a
n
g
e
r
'
)
;

	
	
}

	
	

	
	
/
/
c
o
p
y
 
r
o
o
m
 
t
y
p
e
 
i
c
o
n
s

	
	
i
f
 
(
!
$
t
h
i
s
-
>
p
e
r
f
o
r
m
C
o
p
y
(
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
a
s
s
e
t
s
/
i
m
a
g
e
s
/
i
c
o
n
s
/
r
m
t
y
p
e
s
/
'
,
 
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
u
p
l
o
a
d
e
d
i
m
a
g
e
s
/
r
m
t
y
p
e
s
/
'
)
)
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
M
e
s
s
a
g
e
(
'
E
r
r
o
r
,
 
u
n
a
b
l
e
 
t
o
 
r
o
o
m
 
t
y
p
e
 
i
c
o
n
s
'
,
 
'
d
a
n
g
e
r
'
)
;

	
	
}

	
	

	
	
i
f
 
(
!
$
t
h
i
s
-
>
p
e
r
f
o
r
m
C
o
p
y
(
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
a
s
s
e
t
s
/
i
m
a
g
e
s
/
i
c
o
n
s
/
r
m
t
y
p
e
s
/
'
,
 
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
u
p
l
o
a
d
e
d
i
m
a
g
e
s
/
r
m
t
y
p
e
s
/
m
e
d
i
u
m
/
'
)
)
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
M
e
s
s
a
g
e
(
'
E
r
r
o
r
,
 
u
n
a
b
l
e
 
t
o
 
r
o
o
m
 
t
y
p
e
 
m
e
d
i
u
m
 
i
c
o
n
s
'
,
 
'
d
a
n
g
e
r
'
)
;

	
	
}

	
	

	
	
i
f
 
(
!
$
t
h
i
s
-
>
p
e
r
f
o
r
m
C
o
p
y
(
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
a
s
s
e
t
s
/
i
m
a
g
e
s
/
i
c
o
n
s
/
r
m
t
y
p
e
s
/
'
,
 
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
u
p
l
o
a
d
e
d
i
m
a
g
e
s
/
r
m
t
y
p
e
s
/
t
h
u
m
b
n
a
i
l
/
'
)
)
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
M
e
s
s
a
g
e
(
'
E
r
r
o
r
,
 
u
n
a
b
l
e
 
t
o
 
r
o
o
m
 
t
y
p
e
 
t
h
u
m
b
n
a
i
l
 
i
c
o
n
s
'
,
 
'
d
a
n
g
e
r
'
)
;

	
	
}

	
	

	
	
/
/
c
o
p
y
 
m
a
r
k
e
r
s

	
	
i
f
 
(
!
$
t
h
i
s
-
>
p
e
r
f
o
r
m
C
o
p
y
(
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
a
s
s
e
t
s
/
i
m
a
g
e
s
/
m
a
r
k
e
r
s
/
'
,
 
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
u
p
l
o
a
d
e
d
i
m
a
g
e
s
/
m
a
r
k
e
r
s
/
'
)
)
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
M
e
s
s
a
g
e
(
'
E
r
r
o
r
,
 
u
n
a
b
l
e
 
t
o
 
c
o
p
y
 
m
a
r
k
e
r
 
i
c
o
n
s
'
,
 
'
d
a
n
g
e
r
'
)
;

	
	
}

	
	

	
	
i
f
 
(
!
$
t
h
i
s
-
>
p
e
r
f
o
r
m
C
o
p
y
(
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
a
s
s
e
t
s
/
i
m
a
g
e
s
/
m
a
r
k
e
r
s
/
'
,
 
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
u
p
l
o
a
d
e
d
i
m
a
g
e
s
/
m
a
r
k
e
r
s
/
m
e
d
i
u
m
/
'
)
)
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
M
e
s
s
a
g
e
(
'
E
r
r
o
r
,
 
u
n
a
b
l
e
 
t
o
 
c
o
p
y
 
m
a
r
k
e
r
 
m
e
d
i
u
m
 
i
c
o
n
s
'
,
 
'
d
a
n
g
e
r
'
)
;

	
	
}

	
	

	
	
i
f
 
(
!
$
t
h
i
s
-
>
p
e
r
f
o
r
m
C
o
p
y
(
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
a
s
s
e
t
s
/
i
m
a
g
e
s
/
m
a
r
k
e
r
s
/
'
,
 
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
u
p
l
o
a
d
e
d
i
m
a
g
e
s
/
m
a
r
k
e
r
s
/
t
h
u
m
b
n
a
i
l
/
'
)
)
 
{

	
	
	
$
t
h
i
s
-
>
s
e
t
M
e
s
s
a
g
e
(
'
E
r
r
o
r
,
 
u
n
a
b
l
e
 
t
o
 
c
o
p
y
 
m
a
r
k
e
r
 
t
h
u
m
b
n
a
i
l
 
i
c
o
n
s
'
,
 
'
d
a
n
g
e
r
'
)
;

	
	
}

	
}

	

	
/
/
c
o
p
y
 
u
t
i
l
i
t
y
 
f
u
n
c
t
i
o
n

	
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
p
e
r
f
o
r
m
C
o
p
y
(
$
s
o
u
r
c
e
 
=
 
'
'
,
 
$
t
a
r
g
e
t
 
=
 
'
'
)

	
{

	
	
i
f
 
(
$
s
o
u
r
c
e
 
=
=
 
'
'
 
|
|
 
$
t
a
r
g
e
t
 
=
=
 
'
'
)
 
{

	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}

	
	

	
	
$
c
o
n
t
e
n
t
s
 
=
 
$
t
h
i
s
-
>
f
i
l
e
s
y
s
t
e
m
-
>
l
i
s
t
C
o
n
t
e
n
t
s
(
'
l
o
c
a
l
:
/
/
'
.
$
s
o
u
r
c
e
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
c
o
n
t
e
n
t
s
 
a
s
 
$
f
i
l
e
N
o
d
e
)
 
{

	
	
	
i
f
 
(
i
n
_
a
r
r
a
y
(
s
t
r
t
o
l
o
w
e
r
(
$
f
i
l
e
N
o
d
e
[
'
e
x
t
e
n
s
i
o
n
'
]
)
,
 
$
t
h
i
s
-
>
a
l
l
o
w
e
d
_
i
m
a
g
e
_
e
x
t
e
n
s
i
o
n
s
)
)
 
{

	
	
	
	
t
r
y
 
{

	
	
	
	
	
i
f
 
(
 
!
 
$
t
h
i
s
-
>
f
i
l
e
s
y
s
t
e
m
-
>
h
a
s
(
'
l
o
c
a
l
:
/
/
'
.
$
t
a
r
g
e
t
.
$
f
i
l
e
N
o
d
e
[
'
b
a
s
e
n
a
m
e
'
]
)
)
 
{

	
	
	
	
	
	
$
t
h
i
s
-
>
f
i
l
e
s
y
s
t
e
m
-
>
c
o
p
y
(
'
l
o
c
a
l
:
/
/
'
.
$
f
i
l
e
N
o
d
e
[
'
p
a
t
h
'
]
,
 
'
l
o
c
a
l
:
/
/
'
.
$
t
a
r
g
e
t
.
$
f
i
l
e
N
o
d
e
[
'
b
a
s
e
n
a
m
e
'
]
)
;

	
	
	
	
	
}

	
	
	
	
}

	
	
	
	
c
a
t
c
h
 
(
E
x
c
e
p
t
i
o
n
 
$
e
)
 
{

	
	
	
	
	
$
t
h
i
s
-
>
s
e
t
M
e
s
s
a
g
e
(
'
E
r
r
o
r
,
 
u
n
a
b
l
e
 
t
o
 
c
o
p
y
 
'
 
.
 
'
l
o
c
a
l
:
/
/
'
.
$
f
i
l
e
N
o
d
e
[
'
p
a
t
h
'
]
 
.
 
'
 
t
o
 
'
 
.
 
'
l
o
c
a
l
:
/
/
'
.
$
t
a
r
g
e
t
.
$
f
i
l
e
N
o
d
e
[
'
b
a
s
e
n
a
m
e
'
]
,
 
'
d
a
n
g
e
r
'
)
;

	
	
	
	
	

	
	
	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
	
	
}

	
	
	
}

	
	
}

	
	

	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
}

	

	
/
/
r
e
m
o
v
e
 
o
b
s
o
l
e
t
e
 
f
i
l
e
s
 
a
n
d
 
r
e
g
e
n
e
r
a
t
e
 
r
e
g
i
s
t
r
y

	
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
r
e
m
o
v
e
_
o
b
s
o
l
e
t
e
_
f
i
l
e
s
(
)

	
{

	
	
j
r
_
i
m
p
o
r
t
(
'
j
o
m
r
e
s
_
o
b
s
o
l
e
t
e
_
f
i
l
e
_
h
a
n
d
l
i
n
g
'
)
;

 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
o
b
s
o
l
e
t
e
_
f
i
l
e
_
h
a
n
d
l
i
n
g
 
=
 
n
e
w
 
j
o
m
r
e
s
_
o
b
s
o
l
e
t
e
_
f
i
l
e
_
h
a
n
d
l
i
n
g
(
)
;

 
 
 
 
 
 
 
 

	
	
/
/
r
e
m
o
v
e
 
o
b
s
o
l
e
t
e
 
f
i
l
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
o
b
s
o
l
e
t
e
_
f
i
l
e
_
h
a
n
d
l
i
n
g
-
>
r
e
m
o
v
e
_
o
b
s
o
l
e
t
e
_
f
i
l
e
s
(
)
;

	
	

	
	
/
/
r
e
g
e
n
e
r
a
t
e
 
r
e
g
i
s
t
r
y
 
(
a
g
a
i
n
)

	
	
$
t
h
i
s
-
>
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
_
r
e
g
i
s
t
r
y
-
>
r
e
g
e
n
e
r
a
t
e
_
r
e
g
i
s
t
r
y
(
)
;

	
	

	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
}

	

	
/
/
d
r
o
p
 
j
o
m
r
e
s
 
t
a
b
l
e
s

	
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
d
r
o
p
D
b
T
a
b
l
e
s
(
)

	
{

	
	
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
`
t
a
b
l
e
_
n
a
m
e
`
 
F
R
O
M
 
i
n
f
o
r
m
a
t
i
o
n
_
s
c
h
e
m
a
.
t
a
b
l
e
s
 
W
H
E
R
E
 

	
	
	
	
	
`
t
a
b
l
e
_
s
c
h
e
m
a
`
 
=
 
'
"
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
d
b
'
)
.
"
'

	
	
	
	
	
A
N
D
 
(
`
t
a
b
l
e
_
n
a
m
e
`
 
L
I
K
E
 
'
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
%
'
 

	
	
	
	
	
O
R
 
`
t
a
b
l
e
_
n
a
m
e
`
 
L
I
K
E
 
'
#
_
_
j
o
m
c
o
m
p
_
%
'
 

	
	
	
	
	
O
R
 
`
t
a
b
l
e
_
n
a
m
e
`
 
L
I
K
E
 
'
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
%
'
)
 
"
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


	
	
f
o
r
e
a
c
h
 
(
$
r
e
s
u
l
t
 
a
s
 
$
r
)
 
{

	
	
	
$
q
u
e
r
y
 
=
 
'
D
R
O
P
 
T
A
B
L
E
 
I
F
 
E
X
I
S
T
S
 
'
.
$
r
-
>
t
a
b
l
e
_
n
a
m
e
;

	
	
	
i
f
 
(
!
d
o
I
n
s
e
r
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
 
'
'
)
)
 
{

	
	
	
	
$
t
h
i
s
-
>
s
e
t
M
e
s
s
a
g
e
(
 
'
E
r
r
o
r
,
 
u
n
a
b
l
e
 
t
o
 
d
r
o
p
 
t
a
b
l
e
 
'
.
$
r
-
>
t
a
b
l
e
_
n
a
m
e
)
;

	
	
	
}

	
	
}


	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
}

	

	
/
/
d
e
l
e
t
e
 
a
l
l
 
j
o
m
r
e
s
 
f
i
l
e
s

	
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
d
e
l
e
t
e
F
i
l
e
s
(
)

	
{

	
	
/
/
d
e
l
e
t
e
 
j
o
m
r
e
s
 
d
i
r

	
	
$
t
h
i
s
-
>
f
i
l
e
s
y
s
t
e
m
-
>
d
e
l
e
t
e
D
i
r
(
'
l
o
c
a
l
:
/
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
)
;

	
	

	
	
/
/
d
e
l
e
t
e
 
j
o
m
r
e
s
_
r
o
o
t
 
f
i
l
e

	
	
$
t
h
i
s
-
>
f
i
l
e
s
y
s
t
e
m
-
>
d
e
l
e
t
e
(
'
l
o
c
a
l
:
/
/
j
o
m
r
e
s
_
r
o
o
t
.
p
h
p
'
)
;

	
	

	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
}

	

	
/
/
b
u
i
l
d
 
i
n
s
t
a
l
l
a
t
i
o
n
 
e
r
r
o
r
 
m
e
s
s
a
g
e
s

	
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
 
s
e
t
M
e
s
s
a
g
e
(
$
m
e
s
s
a
g
e
 
=
 
'
'
,
 
$
c
l
a
s
s
_
s
t
y
l
e
 
=
 
'
i
n
f
o
'
)

	
{

	
	
i
f
 
(
t
r
i
m
(
$
m
e
s
s
a
g
e
)
 
=
=
 
'
'
)
 
{

	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}

	
	

	
	
$
c
l
a
s
s
 
=
 
'
a
l
e
r
t
-
'
.
$
c
l
a
s
s
_
s
t
y
l
e
;

	
	

	
	
$
t
h
i
s
-
>
m
e
s
s
a
g
e
s
[
]
 
=
 
'
<
p
 
c
l
a
s
s
=
"
a
l
e
r
t
 
'
.
$
c
l
a
s
s
.
'
"
>
'
.
$
m
e
s
s
a
g
e
.
'
<
/
p
>
'
;

	
}

	

	
/
/
g
e
t
 
i
n
s
t
a
l
l
a
t
i
o
n
 
m
e
s
s
a
g
e
s
/
e
r
r
o
r
s

	
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
M
e
s
s
a
g
e
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
m
e
s
s
a
g
e
s
;

	
}

}

