
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
1
9
9
9
7
m
e
n
u

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
m
e
n
u
_
s
e
c
t
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
m
e
n
u
 
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
n
u
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
m
e
n
u
-
>
g
e
n
e
r
a
t
e
_
a
d
m
i
n
_
m
e
n
u
(
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
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
m
i
n
_
m
e
n
u
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


	
	
/
/
s
e
c
t
i
o
n
 
p
a
r
a
m
s
 
a
r
e
 
i
n
 
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
n
u
-
>
a
d
m
i
n
_
s
e
c
t
i
o
n
s
[
s
e
c
t
i
o
n
_
i
d
]

	
	
/
/
m
e
n
u
 
i
t
e
m
s
 
p
a
r
a
m
s
 
a
r
e
 
i
n
 
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
n
u
-
>
a
d
m
i
n
_
i
t
e
m
s
[
t
a
s
k
]

	
	
/
/
n
o
w
 
l
e
t
`
s
 
g
e
n
e
r
a
t
e
 
t
h
e
 
m
e
n
u
 
o
u
t
p
u
t

	
	
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
n
u
-
>
a
d
m
i
n
_
m
e
n
u
 
a
s
 
$
s
e
c
t
i
o
n
_
i
d
 
=
>
 
$
t
a
s
k
s
)
 
{

	
	
	
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
 
'
C
O
L
L
A
P
S
E
_
I
N
'
 
]
 
=
 
'
'
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
t
a
s
k
s
 
a
s
 
$
t
a
s
k
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

	
	
	
	

	
	
	
	
/
/
m
e
n
u
 
i
t
e
m
 
n
a
m
e

	
	
	
	
$
r
[
'
M
E
N
U
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
u
c
w
o
r
d
s
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
n
u
-
>
a
d
m
i
n
_
i
t
e
m
s
[
$
t
a
s
k
]
[
'
t
i
t
l
e
'
]
)
;


	
	
	
	
/
/
m
e
n
u
 
i
t
e
m
 
u
r
l

	
	
	
	
i
f
 
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
n
u
-
>
a
d
m
i
n
_
i
t
e
m
s
[
$
t
a
s
k
]
[
'
i
s
_
u
r
l
'
]
)
 
{

	
	
	
	
	
$
r
[
'
L
I
N
K
'
]
 
=
 
$
t
a
s
k
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
t
a
s
k
 
!
=
 
'
b
l
a
n
k
'
)
 
{

	
	
	
	
	
$
r
[
'
L
I
N
K
'
]
 
=
 
j
o
m
r
e
s
U
r
l
(
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
A
D
M
I
N
.
'
&
t
a
s
k
=
'
.
$
t
a
s
k
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
[
'
L
I
N
K
'
]
 
=
 
j
o
m
r
e
s
U
r
l
(
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
A
D
M
I
N
)
;

	
	
	
	
}

	
	
	
	

	
	
	
	
/
/
m
e
n
u
 
i
t
e
m
 
i
c
o
n

	
	
	
	
$
r
[
'
I
C
O
N
_
C
L
A
S
S
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
n
u
-
>
a
d
m
i
n
_
i
t
e
m
s
[
$
t
a
s
k
]
[
'
i
c
o
n
'
]
;


	
	
	
	
/
/
m
e
n
u
 
i
t
e
m
 
t
a
r
g
e
t

	
	
	
	
$
r
[
 
'
T
A
R
G
E
T
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
j
o
m
r
e
s
_
m
e
n
u
-
>
a
d
m
i
n
_
i
t
e
m
s
[
$
t
a
s
k
]
[
'
e
x
t
e
r
n
a
l
'
]
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
T
A
R
G
E
T
'
 
]
 
=
 
'
 
t
a
r
g
e
t
=
"
_
b
l
a
n
k
"
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

	
	
	
	

	
	
	
	
/
/
m
e
n
u
 
i
t
e
m
 
d
i
s
a
b
l
e
d
 
c
l
a
s
s

	
	
	
	
$
r
[
 
'
D
I
S
A
B
L
E
D
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
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
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
n
u
-
>
a
d
m
i
n
_
i
t
e
m
s
[
$
t
a
s
k
]
[
'
d
i
s
a
b
l
e
d
'
]
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
L
I
N
K
'
 
]
 
=
 
'
#
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
D
I
S
A
B
L
E
D
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
d
i
s
a
b
l
e
d
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

	
	
	
	

	
	
	
	
/
/
m
e
n
u
 
i
t
e
m
 
b
a
d
g
e
s
 
T
O
D
O
:
 
f
i
n
d
 
a
 
b
e
t
t
e
r
 
w
a
y
 
o
r
 
r
e
m
o
v
e
 
t
h
i
s
 
c
o
m
p
l
e
t
e
l
y

	
	
	
	
$
r
[
 
'
B
A
D
G
E
S
'
 
]
 
=
 
'
'
;


	
	
	
	
i
f
 
(
!
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
n
u
-
>
a
d
m
i
n
_
i
t
e
m
s
[
$
t
a
s
k
]
[
'
i
s
_
u
r
l
'
]
 
&
&
 
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
a
s
k
'
)
 
!
=
 
'
a
d
d
p
l
u
g
i
n
'
)
 
{

	
	
	
	
	
$
i
t
e
m
s
_
r
e
q
u
i
r
i
n
g
_
a
t
t
e
n
t
i
o
n
 
=
 
g
e
t
_
n
u
m
b
e
r
_
o
f
_
i
t
e
m
s
_
r
e
q
u
i
r
i
n
g
_
a
t
t
e
n
t
i
o
n
_
f
o
r
_
m
e
n
u
_
o
p
t
i
o
n
(
$
t
a
s
k
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

	
	
	
	
	
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
t
e
m
s
_
r
e
q
u
i
r
i
n
g
_
a
t
t
e
n
t
i
o
n
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
t
e
m
s
_
r
e
q
u
i
r
i
n
g
_
a
t
t
e
n
t
i
o
n
 
a
s
 
$
c
o
l
o
u
r
 
=
>
 
$
n
u
m
b
e
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
n
u
m
b
e
r
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
A
D
M
I
N
I
S
T
R
A
T
O
R
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
m
e
n
u
_
b
a
d
g
e
_
'
.
$
c
o
l
o
u
r
.
'
.
h
t
m
l
'
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
i
t
e
m
s
_
r
e
q
u
i
r
i
n
g
_
a
t
t
e
n
t
i
o
n
'
,
 
a
r
r
a
y
(
a
r
r
a
y
(
'
N
U
M
B
E
R
'
 
=
>
 
$
n
u
m
b
e
r
)
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
B
A
D
G
E
S
'
 
]
 
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

	
	
	
	

	
	
	
	
/
/
a
c
t
i
v
e
 
m
e
n
u
 
i
t
e
m

	
	
	
	
$
r
[
 
'
A
C
T
I
V
E
'
 
]
 
=
 
'
'
;

	
	
	
	

	
	
	
	
i
f
 
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
t
a
s
k
'
)
 
=
=
 
$
t
a
s
k
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
A
C
T
I
V
E
'
 
]
 
=
 
'
a
c
t
i
v
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
C
O
L
L
A
P
S
E
_
I
N
'
 
]
 
=
 
'
i
n
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
i
f
 
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
t
a
s
k
'
)
 
=
=
 
'
'
 
&
&
 
$
t
a
s
k
 
=
=
 
'
b
l
a
n
k
'
 
&
&
 
!
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
n
u
-
>
a
d
m
i
n
_
i
t
e
m
s
[
$
t
a
s
k
]
[
'
e
x
t
e
r
n
a
l
'
]
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
A
C
T
I
V
E
'
 
]
 
=
 
'
a
c
t
i
v
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
C
O
L
L
A
P
S
E
_
I
N
'
 
]
 
=
 
'
i
n
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

	
	
	
	

	
	
	
	
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
T
E
G
O
R
Y
'
 
]
 
=
 
j
r
_
u
c
w
o
r
d
s
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
n
u
-
>
a
d
m
i
n
_
s
e
c
t
i
o
n
s
[
$
s
e
c
t
i
o
n
_
i
d
]
[
'
t
i
t
l
e
'
]
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
I
D
'
 
]
 
=
 
'
c
p
a
n
e
l
-
c
a
t
e
g
o
r
y
-
'
.
$
s
e
c
t
i
o
n
_
i
d
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
A
D
M
I
N
I
S
T
R
A
T
O
R
)
;

	
	
	
i
f
 
(
t
h
i
s
_
c
m
s
_
i
s
_
j
o
o
m
l
a
(
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
r
o
l
_
p
a
n
e
l
_
m
e
n
u
_
o
p
t
i
o
n
s
_
v
e
r
t
i
c
a
l
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
r
o
l
_
p
a
n
e
l
_
m
e
n
u
_
o
p
t
i
o
n
s
_
h
o
r
i
z
o
n
t
a
l
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
m
e
n
u
_
s
e
c
t
i
o
n
s
[
]
[
 
'
S
E
C
T
I
O
N
'
 
]
 
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
A
D
M
I
N
I
S
T
R
A
T
O
R
)
;

	
	
i
f
 
(
t
h
i
s
_
c
m
s
_
i
s
_
j
o
o
m
l
a
(
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
r
o
l
_
p
a
n
e
l
_
m
e
n
u
_
w
r
a
p
p
e
r
_
v
e
r
t
i
c
a
l
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
r
o
l
_
p
a
n
e
l
_
m
e
n
u
_
w
r
a
p
p
e
r
_
h
o
r
i
z
o
n
t
a
l
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
m
e
n
u
_
s
e
c
t
i
o
n
s
'
,
 
$
m
e
n
u
_
s
e
c
t
i
o
n
s
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

