
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
0
c
o
n
t
a
c
t
o
w
n
e
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
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
h
o
r
t
c
o
d
e
_
d
a
t
a
 
=
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
t
a
s
k
'
 
=
>
 
'
c
o
n
t
a
c
t
o
w
n
e
r
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
i
n
f
o
'
 
=
>
 
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
C
O
N
T
A
C
T
O
W
N
E
R
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
u
m
e
n
t
s
'
 
=
>
 
a
r
r
a
y
(
0
 
=
>
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
u
m
e
n
t
'
 
=
>
 
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
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
_
i
n
f
o
'
 
=
>
 
'
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
C
O
N
T
A
C
T
O
W
N
E
R
_
A
R
G
_
P
R
O
P
E
R
T
Y
_
U
I
D
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
'
a
r
g
_
e
x
a
m
p
l
e
'
 
=
>
 
'
1
8
'
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
'
'
;


 
 
 
 
 
 
 
 
$
u
s
e
_
r
e
c
a
p
t
c
h
a
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
i
f
 
(
$
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
r
e
c
a
p
t
c
h
a
_
p
u
b
l
i
c
_
k
e
y
'
 
]
 
!
=
 
'
'
 
&
&
 
$
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
r
e
c
a
p
t
c
h
a
_
p
r
i
v
a
t
e
_
k
e
y
'
 
]
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
u
s
e
_
r
e
c
a
p
t
c
h
a
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
)
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
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
o
m
r
e
s
_
t
e
m
p
_
b
o
o
k
i
n
g
_
h
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
u
s
e
_
r
e
c
a
p
t
c
h
a
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
c
a
p
t
c
h
a
 
=
 
n
e
w
 
\
R
e
C
a
p
t
c
h
a
\
R
e
C
a
p
t
c
h
a
(
t
r
i
m
(
$
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
r
e
c
a
p
t
c
h
a
_
p
r
i
v
a
t
e
_
k
e
y
'
 
]
)
,
 
n
e
w
 
\
R
e
C
a
p
t
c
h
a
\
R
e
q
u
e
s
t
M
e
t
h
o
d
\
S
o
c
k
e
t
P
o
s
t
(
)
)
;

 
 
 
 
 
 
 
 
}

	
	

	
	
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
 
(
i
n
t
)
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
,
 
0
)
;

	
	
$
s
e
l
e
c
t
e
d
P
r
o
p
e
r
t
y
 
=
 
(
i
n
t
)
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
s
e
l
e
c
t
e
d
P
r
o
p
e
r
t
y
'
,
 
0
)
;


 
 
 
 
 
 
 
 
i
f
 
(
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
=
 
0
)
 
{

	
	
	
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
 
]
)
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
 
i
n
t
v
a
l
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
 
]
)
;

	
	
	
}
 
e
l
s
e
 
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
 
$
s
e
l
e
c
t
e
d
P
r
o
p
e
r
t
y
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
s
e
t
m
e
t
a
d
a
t
a
(
'
r
o
b
o
t
s
'
,
 
'
n
o
i
n
d
e
x
,
n
o
f
o
l
l
o
w
'
)
;

	
	
	
}

	
	
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
_
P
O
S
T
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
u
i
d
'
 
]
)
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
 
(
i
n
t
)
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
P
O
S
T
,
 
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
,
 
0
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
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
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
s
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
s
t
_
v
i
e
w
e
d
_
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
,
 
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
u
s
e
r
_
c
a
n
_
v
i
e
w
_
t
h
i
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
(
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
)
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
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
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
n
o
s
h
o
w
n
o
w
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
p
r
o
p
e
r
t
y
_
h
e
a
d
e
r
(
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
)
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
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
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
b
a
s
i
c
_
p
r
o
p
e
r
t
y
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
c
u
r
r
e
n
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
-
>
g
a
t
h
e
r
_
d
a
t
a
(
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
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
r
g
e
t
 
=
 
$
c
u
r
r
e
n
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
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
n
a
m
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
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
a
r
g
e
t
 
=
 
$
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
b
u
s
i
n
e
s
s
_
n
a
m
e
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
N
T
A
N
T
_
U
S
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
N
T
A
N
T
_
U
S
'
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
S
U
B
J
E
C
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
_
T
I
T
L
E
'
)
.
'
 
'
.
$
t
a
r
g
e
t
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
E
N
Q
U
I
R
Y
'
 
]
 
=
 
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
e
n
q
u
i
r
y
'
,
 
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
_
Y
O
U
R
_
E
N
Q
U
I
R
Y
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
_
Y
O
U
R
_
E
N
Q
U
I
R
Y
'
,
 
f
a
l
s
e
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
G
U
E
S
T
_
N
A
M
E
'
 
]
 
=
 
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
g
u
e
s
t
_
n
a
m
e
'
,
 
'
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
R
O
P
E
R
T
Y
_
U
I
D
'
 
]
 
=
 
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
g
u
e
s
t
_
e
m
a
i
l
 
=
 
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
g
u
e
s
t
_
e
m
a
i
l
'
,
 
'
'
)
;

	
	

 
 
 
 
 
 
 
 
i
f
 
(
$
g
u
e
s
t
_
e
m
a
i
l
 
!
=
 
'
'
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
G
U
E
S
T
_
E
M
A
I
L
'
 
]
 
=
 
$
g
u
e
s
t
_
e
m
a
i
l
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
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
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
g
u
e
s
t
[
 
'
e
m
a
i
l
'
 
]
)
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
G
U
E
S
T
_
E
M
A
I
L
'
 
]
 
=
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
g
u
e
s
t
[
 
'
e
m
a
i
l
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
o
u
t
p
u
t
[
 
'
G
U
E
S
T
_
E
M
A
I
L
'
 
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
}

	
	

	
	
$
g
u
e
s
t
_
p
h
o
n
e
 
=
 
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
g
u
e
s
t
_
p
h
o
n
e
'
,
 
'
'
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
g
u
e
s
t
_
p
h
o
n
e
 
!
=
 
'
'
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
G
U
E
S
T
_
P
H
O
N
E
'
 
]
 
=
 
$
g
u
e
s
t
_
p
h
o
n
e
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
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
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
g
u
e
s
t
[
 
'
t
e
l
_
m
o
b
i
l
e
'
 
]
)
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
G
U
E
S
T
_
P
H
O
N
E
'
 
]
 
=
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
g
u
e
s
t
[
 
'
t
e
l
_
m
o
b
i
l
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
o
u
t
p
u
t
[
 
'
G
U
E
S
T
_
P
H
O
N
E
'
 
]
 
=
 
'
'
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
H
E
M
A
I
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
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
E
M
A
I
L
_
E
X
P
L
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
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
E
M
A
I
L
_
E
X
P
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
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
E
M
A
I
L
_
T
E
X
T
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
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
E
M
A
I
L
_
T
E
X
T
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
E
N
Q
U
I
R
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
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
_
E
N
Q
U
I
R
Y
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
_
E
N
Q
U
I
R
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
P
L
A
C
E
H
O
L
D
E
R
_
E
N
Q
U
I
R
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
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
_
E
N
Q
U
I
R
Y
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
_
E
N
Q
U
I
R
Y
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
P
H
O
N
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
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
M
O
B
I
L
E
_
E
X
P
L
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
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
M
O
B
I
L
E
_
E
X
P
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
P
L
A
C
E
H
O
L
D
E
R
_
P
H
O
N
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
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
M
O
B
I
L
E
_
E
X
P
L
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
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
M
O
B
I
L
E
_
E
X
P
L
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
J
O
M
R
E
S
_
R
E
G
I
S
T
R
A
T
I
O
N
_
I
N
S
T
R
U
C
T
I
O
N
S
_
S
T
E
P
2
_
2
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
R
E
G
I
S
T
R
A
T
I
O
N
_
I
N
S
T
R
U
C
T
I
O
N
S
_
S
T
E
P
2
_
2
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
R
E
G
I
S
T
R
A
T
I
O
N
_
I
N
S
T
R
U
C
T
I
O
N
S
_
S
T
E
P
2
_
2
'
,
 
f
a
l
s
e
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
J
O
M
R
E
S
_
R
E
G
I
S
T
R
A
T
I
O
N
_
I
N
S
T
R
U
C
T
I
O
N
S
_
S
T
E
P
2
_
2
_
B
U
T
T
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
O
M
R
E
S
_
R
E
G
I
S
T
R
A
T
I
O
N
_
I
N
S
T
R
U
C
T
I
O
N
S
_
S
T
E
P
2
_
2
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
R
E
G
I
S
T
R
A
T
I
O
N
_
I
N
S
T
R
U
C
T
I
O
N
S
_
S
T
E
P
2
_
2
'
,
 
f
a
l
s
e
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
J
O
M
R
E
S
_
R
E
C
A
P
T
C
H
A
_
I
N
S
T
R
U
C
T
I
O
N
S
_
V
I
S
U
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
J
O
M
R
E
S
_
R
E
C
A
P
T
C
H
A
_
I
N
S
T
R
U
C
T
I
O
N
S
_
V
I
S
U
A
L
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
R
E
C
A
P
T
C
H
A
_
I
N
S
T
R
U
C
T
I
O
N
S
_
V
I
S
U
A
L
'
,
 
f
a
l
s
e
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
J
O
M
R
E
S
_
R
E
C
A
P
T
C
H
A
_
I
N
S
T
R
U
C
T
I
O
N
S
_
A
U
D
I
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
J
O
M
R
E
S
_
R
E
C
A
P
T
C
H
A
_
I
N
S
T
R
U
C
T
I
O
N
S
_
A
U
D
I
O
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
R
E
C
A
P
T
C
H
A
_
I
N
S
T
R
U
C
T
I
O
N
S
_
A
U
D
I
O
'
,
 
f
a
l
s
e
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
J
O
M
R
E
S
_
R
E
C
A
P
T
C
H
A
_
P
L
A
Y
_
A
G
A
I
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
J
O
M
R
E
S
_
R
E
C
A
P
T
C
H
A
_
P
L
A
Y
_
A
G
A
I
N
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
R
E
C
A
P
T
C
H
A
_
P
L
A
Y
_
A
G
A
I
N
'
,
 
f
a
l
s
e
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
J
O
M
R
E
S
_
R
E
C
A
P
T
C
H
A
_
C
A
N
T
_
H
E
A
R
_
T
H
I
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
J
O
M
R
E
S
_
R
E
C
A
P
T
C
H
A
_
C
A
N
T
_
H
E
A
R
_
T
H
I
S
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
R
E
C
A
P
T
C
H
A
_
C
A
N
T
_
H
E
A
R
_
T
H
I
S
'
,
 
f
a
l
s
e
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
J
O
M
R
E
S
_
R
E
C
A
P
T
C
H
A
_
V
I
S
U
A
L
_
C
H
A
L
L
E
N
G
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
J
O
M
R
E
S
_
R
E
C
A
P
T
C
H
A
_
V
I
S
U
A
L
_
C
H
A
L
L
E
N
G
E
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
R
E
C
A
P
T
C
H
A
_
V
I
S
U
A
L
_
C
H
A
L
L
E
N
G
E
'
,
 
f
a
l
s
e
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
J
O
M
R
E
S
_
R
E
C
A
P
T
C
H
A
_
A
U
D
I
O
_
C
H
A
L
L
E
N
G
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
J
O
M
R
E
S
_
R
E
C
A
P
T
C
H
A
_
A
U
D
I
O
_
C
H
A
L
L
E
N
G
E
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
R
E
C
A
P
T
C
H
A
_
A
U
D
I
O
_
C
H
A
L
L
E
N
G
E
'
,
 
f
a
l
s
e
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
J
O
M
R
E
S
_
R
E
C
A
P
T
C
H
A
_
R
E
F
R
E
S
H
_
B
T
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
J
O
M
R
E
S
_
R
E
C
A
P
T
C
H
A
_
R
E
F
R
E
S
H
_
B
T
N
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
R
E
C
A
P
T
C
H
A
_
R
E
F
R
E
S
H
_
B
T
N
'
,
 
f
a
l
s
e
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
J
O
M
R
E
S
_
R
E
C
A
P
T
C
H
A
_
H
E
L
P
_
B
T
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
J
O
M
R
E
S
_
R
E
C
A
P
T
C
H
A
_
H
E
L
P
_
B
T
N
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
R
E
C
A
P
T
C
H
A
_
H
E
L
P
_
B
T
N
'
,
 
f
a
l
s
e
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
J
O
M
R
E
S
_
R
E
C
A
P
T
C
H
A
_
I
N
C
O
R
R
E
C
T
_
T
R
Y
_
A
G
A
I
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
J
O
M
R
E
S
_
R
E
C
A
P
T
C
H
A
_
I
N
C
O
R
R
E
C
T
_
T
R
Y
_
A
G
A
I
N
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
R
E
C
A
P
T
C
H
A
_
I
N
C
O
R
R
E
C
T
_
T
R
Y
_
A
G
A
I
N
'
,
 
f
a
l
s
e
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
_
J
O
M
R
E
S
_
R
E
Q
U
I
R
E
D
F
I
E
L
D
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
O
M
R
E
S
_
R
E
Q
U
I
R
E
D
F
I
E
L
D
S
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
R
E
Q
U
I
R
E
D
F
I
E
L
D
S
'
,
 
f
a
l
s
e
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
P
R
O
P
E
R
T
Y
_
D
E
T
A
I
L
S
_
U
R
L
'
 
]
 
=
 
g
e
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
_
u
r
l
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
s
t
_
v
i
e
w
e
d
_
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
)
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
u
s
e
_
r
e
c
a
p
t
c
h
a
 
&
&
 
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
U
E
S
T
_
N
A
M
E
'
 
]
 
!
=
 
'
'
 
&
&
 
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
U
B
J
E
C
T
'
 
]
 
!
=
 
'
'
 
&
&
 
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
U
E
S
T
_
E
M
A
I
L
'
 
]
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
h
a
l
l
e
n
g
e
 
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
_
P
O
S
T
[
 
'
g
-
r
e
c
a
p
t
c
h
a
-
r
e
s
p
o
n
s
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
h
a
l
l
e
n
g
e
 
=
 
t
r
i
m
(
$
_
P
O
S
T
[
 
'
g
-
r
e
c
a
p
t
c
h
a
-
r
e
s
p
o
n
s
e
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
h
a
l
l
e
n
g
e
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
p
 
=
 
$
r
e
c
a
p
t
c
h
a
-
>
v
e
r
i
f
y
(

	
	
	
	
	
	
	
$
_
P
O
S
T
[
'
g
-
r
e
c
a
p
t
c
h
a
-
r
e
s
p
o
n
s
e
'
]
,

	
	
	
	
	
	
	
$
_
S
E
R
V
E
R
[
'
R
E
M
O
T
E
_
A
D
D
R
'
]

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
p
-
>
i
s
_
v
a
l
i
d
 
=
 
$
r
e
s
p
-
>
i
s
S
u
c
c
e
s
s
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
r
e
s
p
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
p
-
>
i
s
_
v
a
l
i
d
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
p
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
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
[
 
'
S
U
B
J
E
C
T
'
 
]
 
!
=
 
'
'
 
&
&
 
$
o
u
t
p
u
t
[
 
'
E
N
Q
U
I
R
Y
'
 
]
 
!
=
 
'
'
 
&
&
 
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
U
E
S
T
_
N
A
M
E
'
 
]
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
p
-
>
i
s
_
v
a
l
i
d
 
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
r
e
s
p
-
>
i
s
_
v
a
l
i
d
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
o
k
t
o
s
e
n
d
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
i
f
 
(
$
r
e
s
p
-
>
i
s
_
v
a
l
i
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
k
t
o
s
e
n
d
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
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
r
i
g
g
e
r
E
v
e
n
t
(
'
0
3
5
0
0
'
)
;
 
/
/
 
O
p
t
i
o
n
a
l
,
 
e
g
 
f
o
r
 
a
f
f
i
l
i
a
t
e
 
s
c
h
e
m
e
s
 
o
f
f
e
r
i
n
g
 
p
a
y
-
p
e
r
-
l
e
a
d

 
 
 
 
 
 
 
 
 
 
 
 
$
s
u
b
j
e
c
t
 
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
_
S
U
B
J
E
C
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
_
S
U
B
J
E
C
T
'
,
 
f
a
l
s
e
)
.
'
 
'
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
G
U
E
S
T
_
N
A
M
E
'
 
]
.
'
 
'
.
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
_
R
E
G
A
R
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
_
R
E
G
A
R
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
.
'
 
'
.
$
c
u
r
r
e
n
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
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
n
a
m
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
T
H
A
N
K
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
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
_
T
H
A
N
K
S
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
_
T
H
A
N
K
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
E
N
Q
U
I
R
Y
'
 
]
 
.
=
 
'
<
b
r
 
/
>
E
m
a
i
l
:
 
'
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
G
U
E
S
T
_
E
M
A
I
L
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
E
N
Q
U
I
R
Y
'
 
]
 
.
=
 
'
<
b
r
 
/
>
'
.
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
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
M
O
B
I
L
E
_
E
X
P
L
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
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
M
O
B
I
L
E
_
E
X
P
L
'
)
.
'
:
 
'
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
G
U
E
S
T
_
P
H
O
N
E
'
 
]
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
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
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
r
g
e
t
_
e
m
a
i
l
 
=
 
$
c
u
r
r
e
n
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
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
e
m
a
i
l
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
r
g
e
t
_
e
m
a
i
l
 
=
 
$
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
b
u
s
i
n
e
s
s
_
e
m
a
i
l
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
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
o
v
e
r
r
i
d
e
_
p
r
o
p
e
r
t
y
_
c
o
n
t
a
c
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
]
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
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
o
v
e
r
r
i
d
e
_
p
r
o
p
e
r
t
y
_
c
o
n
t
a
c
t
_
e
m
a
i
l
'
]
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
r
g
e
t
_
e
m
a
i
l
 
=
 
$
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
o
v
e
r
r
i
d
e
_
p
r
o
p
e
r
t
y
_
c
o
n
t
a
c
t
_
e
m
a
i
l
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
j
o
m
r
e
s
M
a
i
l
e
r
(
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
U
E
S
T
_
E
M
A
I
L
'
 
]
,
 
$
c
u
r
r
e
n
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
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
n
a
m
e
,
 
$
t
a
r
g
e
t
_
e
m
a
i
l
,
 
$
s
u
b
j
e
c
t
,
 
$
o
u
t
p
u
t
[
 
'
E
N
Q
U
I
R
Y
'
 
]
,
 
$
m
o
d
e
 
=
 
1
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
F
a
i
l
u
r
e
 
i
n
 
s
e
n
d
i
n
g
 
e
n
q
u
i
r
y
 
e
m
a
i
l
 
t
o
 
h
o
t
e
l
.
 
T
a
r
g
e
t
 
a
d
d
r
e
s
s
:
 
'
.
$
t
a
r
g
e
t
_
e
m
a
i
l
.
'
 
S
u
b
j
e
c
t
'
.
$
s
u
b
j
e
c
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
j
o
m
r
e
s
M
a
i
l
e
r
(
$
t
a
r
g
e
t
_
e
m
a
i
l
,
 
$
c
u
r
r
e
n
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
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
n
a
m
e
,
 
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
U
E
S
T
_
E
M
A
I
L
'
 
]
,
 
$
s
u
b
j
e
c
t
,
 
$
o
u
t
p
u
t
[
 
'
E
N
Q
U
I
R
Y
'
 
]
,
 
$
m
o
d
e
 
=
 
1
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
F
a
i
l
u
r
e
 
i
n
 
s
e
n
d
i
n
g
 
e
n
q
u
i
r
y
 
e
m
a
i
l
 
t
o
 
g
u
e
s
t
.
 
T
a
r
g
e
t
 
a
d
d
r
e
s
s
:
 
'
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
G
U
E
S
T
_
E
M
A
I
L
'
 
]
.
'
 
S
u
b
j
e
c
t
'
.
$
s
u
b
j
e
c
t
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
R
O
P
E
R
T
Y
U
I
D
'
 
]
 
=
 
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
o
u
t
p
u
t
[
 
'
T
A
S
K
'
 
]
 
=
 
'
v
i
e
w
p
r
o
p
e
r
t
y
&
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
o
u
t
p
u
t
[
 
'
B
A
C
K
T
O
P
R
O
P
E
R
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
O
M
R
E
S
_
B
A
C
K
T
O
P
R
O
P
E
R
T
Y
D
E
T
A
I
L
S
L
I
N
K
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
A
C
K
T
O
P
R
O
P
E
R
T
Y
D
E
T
A
I
L
S
L
I
N
K
'
)
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
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
=
 
0
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
T
A
S
K
'
 
]
 
=
 
'
s
e
a
r
c
h
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
B
A
C
K
T
O
P
R
O
P
E
R
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
O
M
R
E
S
_
S
E
A
R
C
H
_
B
U
T
T
O
N
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
S
E
A
R
C
H
_
B
U
T
T
O
N
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
u
s
e
_
s
s
l
 
=
 
f
a
l
s
e
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
_
S
E
R
V
E
R
[
'
H
T
T
P
S
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
u
s
e
_
s
s
l
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
u
s
e
_
r
e
c
a
p
t
c
h
a
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
C
A
P
T
C
H
A
'
 
]
 
=
 
'

	
	
	
	
	
<
d
i
v
 
c
l
a
s
s
=
"
g
-
r
e
c
a
p
t
c
h
a
"
 
d
a
t
a
-
s
i
t
e
k
e
y
=
"
'
.
t
r
i
m
(
$
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
r
e
c
a
p
t
c
h
a
_
p
u
b
l
i
c
_
k
e
y
'
 
]
)
.
'
"
>
<
/
d
i
v
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

	
	
	
	
	
	
s
r
c
=
"
h
t
t
p
s
:
/
/
w
w
w
.
g
o
o
g
l
e
.
c
o
m
/
r
e
c
a
p
t
c
h
a
/
a
p
i
.
j
s
?
h
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
l
a
n
g
_
s
h
o
r
t
c
o
d
e
'
)
.
'
"
>

	
	
	
	
	
<
/
s
c
r
i
p
t
>

	
	
	
	
'
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
c
u
s
t
o
m
_
p
a
t
h
_
t
o
_
t
e
m
p
l
a
t
e
'
 
]
)
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
u
s
t
o
m
_
p
a
t
h
_
t
o
_
t
e
m
p
l
a
t
e
'
 
]
.
'
c
o
n
t
a
c
t
_
o
w
n
e
r
.
h
t
m
l
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
u
s
t
o
m
_
p
a
t
h
_
t
o
_
t
e
m
p
l
a
t
e
'
 
]
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

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
$
o
k
t
o
s
e
n
d
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
c
o
n
t
a
c
t
_
o
w
n
e
r
_
s
e
n
t
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
c
o
n
t
a
c
t
_
o
w
n
e
r
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
n
o
s
h
o
w
n
o
w
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
_
T
H
A
N
K
S
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
_
T
H
A
N
K
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
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
_
S
U
B
J
E
C
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
_
S
U
B
J
E
C
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
_
R
E
G
A
R
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
_
R
E
G
A
R
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
C
O
M
_
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
E
M
A
I
L
_
E
X
P
L
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
M
R
_
E
B
_
G
U
E
S
T
_
J
O
M
R
E
S
_
E
M
A
I
L
_
E
X
P
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
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
E
M
A
I
L
_
T
E
X
T
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
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
E
M
A
I
L
_
T
E
X
T
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
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
_
E
N
Q
U
I
R
Y
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
C
O
N
T
A
C
T
H
O
T
E
L
_
E
N
Q
U
I
R
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
O
M
R
E
S
_
B
A
C
K
T
O
P
R
O
P
E
R
T
Y
D
E
T
A
I
L
S
L
I
N
K
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
A
C
K
T
O
P
R
O
P
E
R
T
Y
D
E
T
A
I
L
S
L
I
N
K
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

