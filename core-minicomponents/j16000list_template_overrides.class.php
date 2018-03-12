
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
6
0
0
0
l
i
s
t
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
o
v
e
r
r
i
d
e
s

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
e
m
p
l
a
t
e
_
p
a
c
k
a
g
e
s
 
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
t
e
m
p
l
a
t
e
_
p
a
c
k
a
g
e
s
'
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
t
e
m
p
l
a
t
e
_
p
a
c
k
a
g
e
s
)
)
 
{

	
	
	

	
	
	
$
t
e
m
p
l
a
t
e
_
o
v
e
r
r
i
d
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
t
e
m
p
l
a
t
e
_
o
v
e
r
r
i
d
e
s
'
)
;


	
	
	
$
t
e
m
p
l
a
t
e
_
f
i
l
e
s
_
o
v
e
r
r
i
d
e
a
b
l
e
 
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
a
l
r
e
a
d
y
_
f
o
u
n
d
 
=
 
a
r
r
a
y
(
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
t
e
m
p
l
a
t
e
_
p
a
c
k
a
g
e
s
 
a
s
 
$
p
a
c
k
a
g
e
s
 
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
p
a
c
k
a
g
e
s
 
a
s
 
$
p
a
c
k
a
g
e
_
i
t
e
m
 
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
t
e
m
p
l
a
t
e
_
n
a
m
e
 
=
 
$
p
a
c
k
a
g
e
_
i
t
e
m
[
'
t
e
m
p
l
a
t
e
_
n
a
m
e
'
]
;

	
	
	
	
	
i
f
 
(
!
i
n
_
a
r
r
a
y
(
$
t
e
m
p
l
a
t
e
_
n
a
m
e
 
,
 
$
a
l
r
e
a
d
y
_
f
o
u
n
d
)
)
 
{

	
	
	
	
	
	
$
r
[
'
T
E
M
P
L
A
T
E
_
N
A
M
E
'
]
 
=
 
$
t
e
m
p
l
a
t
e
_
n
a
m
e
;


	
	
	
	
	
	
$
t
o
o
l
b
a
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
I
t
e
m
T
o
o
l
b
a
r
'
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
t
e
m
p
l
a
t
e
_
o
v
e
r
r
i
d
e
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
o
v
e
r
r
i
d
e
s
[
$
t
e
m
p
l
a
t
e
_
n
a
m
e
]
)
)
 
{

	
	
	
	
	
	
	
$
r
[
'
P
A
T
H
'
]
 
=
 
$
t
e
m
p
l
a
t
e
_
o
v
e
r
r
i
d
e
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
o
v
e
r
r
i
d
e
s
[
$
t
e
m
p
l
a
t
e
_
n
a
m
e
]
[
'
p
a
t
h
'
]
;

	
	
	
	
	
	
	
$
t
o
o
l
b
a
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
I
t
e
m
T
o
o
l
b
a
r
'
)
;

	
	
	
	
	
	
	
$
t
o
o
l
b
a
r
-
>
n
e
w
T
o
o
l
b
a
r
(
)
;

	
	
	
	
	
	
	
$
t
o
o
l
b
a
r
-
>
a
d
d
I
t
e
m
(
'
f
a
 
f
a
-
p
e
n
c
i
l
-
s
q
u
a
r
e
-
o
'
,
 
'
b
t
n
 
b
t
n
-
i
n
f
o
'
,
 
'
'
,
 
j
o
m
r
e
s
U
R
L
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
e
d
i
t
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
o
v
e
r
r
i
d
e
&
t
e
m
p
l
a
t
e
_
n
a
m
e
=
'
.
$
t
e
m
p
l
a
t
e
_
n
a
m
e
)
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
C
O
M
M
O
N
_
E
D
I
T
'
,
 
'
C
O
M
M
O
N
_
E
D
I
T
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
t
o
o
l
b
a
r
-
>
a
d
d
S
e
c
o
n
d
a
r
y
I
t
e
m
(
 
'
f
a
 
f
a
-
t
r
a
s
h
-
o
'
,
 
'
'
,
 
'
'
,
 
j
o
m
r
e
s
U
R
L
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
d
e
l
e
t
e
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
o
v
e
r
r
i
d
e
&
t
e
m
p
l
a
t
e
_
n
a
m
e
=
'
 
.
 
$
t
e
m
p
l
a
t
e
_
n
a
m
e
 
)
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
C
O
M
M
O
N
_
D
E
L
E
T
E
'
,
 
'
C
O
M
M
O
N
_
D
E
L
E
T
E
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
P
A
T
H
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
T
E
M
P
L
A
T
E
_
P
A
C
K
A
G
E
_
N
O
T
_
O
V
E
R
R
I
D
D
E
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
T
E
M
P
L
A
T
E
_
P
A
C
K
A
G
E
_
N
O
T
_
O
V
E
R
R
I
D
D
E
N
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
t
o
o
l
b
a
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
I
t
e
m
T
o
o
l
b
a
r
'
)
;

	
	
	
	
	
	
	
$
t
o
o
l
b
a
r
-
>
n
e
w
T
o
o
l
b
a
r
(
)
;

	
	
	
	
	
	
	
$
t
o
o
l
b
a
r
-
>
a
d
d
I
t
e
m
(
'
f
a
 
f
a
-
p
e
n
c
i
l
-
s
q
u
a
r
e
-
o
'
,
 
'
b
t
n
 
b
t
n
-
i
n
f
o
'
,
 
'
'
,
 
j
o
m
r
e
s
U
R
L
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
e
d
i
t
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
o
v
e
r
r
i
d
e
&
t
e
m
p
l
a
t
e
_
n
a
m
e
=
'
.
$
t
e
m
p
l
a
t
e
_
n
a
m
e
)
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
C
O
M
M
O
N
_
E
D
I
T
'
,
 
'
C
O
M
M
O
N
_
E
D
I
T
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

	
	
	
	
	
	
}

	
	
	
	
	
	
$
r
[
'
E
D
I
T
L
I
N
K
'
]
 
=
 
$
t
o
o
l
b
a
r
-
>
g
e
t
T
o
o
l
b
a
r
(
)
;

	
	
	
	
	
	
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

	
	
	
	
	
	
$
a
l
r
e
a
d
y
_
f
o
u
n
d
[
]
 
=
 
$
t
e
m
p
l
a
t
e
_
n
a
m
e
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
_
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
_
P
A
C
K
A
G
E
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
T
E
M
P
L
A
T
E
_
P
A
C
K
A
G
E
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
T
E
M
P
L
A
T
E
_
P
A
C
K
A
G
E
S
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
_
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
_
P
A
C
K
A
G
E
S
_
L
E
A
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
_
P
A
C
K
A
G
E
S
_
L
E
A
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
T
E
M
P
L
A
T
E
_
P
A
C
K
A
G
E
S
_
L
E
A
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
T
E
M
P
L
A
T
E
_
P
A
C
K
A
G
E
S
_
I
N
F
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
T
E
M
P
L
A
T
E
_
P
A
C
K
A
G
E
S
_
I
N
F
O
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
T
E
M
P
L
A
T
E
_
P
A
C
K
A
G
E
S
_
I
N
F
O
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
_
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
_
P
A
C
K
A
G
E
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
_
P
A
C
K
A
G
E
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
T
E
M
P
L
A
T
E
_
P
A
C
K
A
G
E
_
N
A
M
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
_
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
_
P
A
C
K
A
G
E
_
P
A
T
H
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
T
E
M
P
L
A
T
E
_
P
A
C
K
A
G
E
_
P
A
T
H
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
T
E
M
P
L
A
T
E
_
P
A
C
K
A
G
E
_
P
A
T
H
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
t
e
m
p
l
a
t
e
_
p
a
c
k
a
g
e
s
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

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
N
o
 
t
e
m
p
l
a
t
e
 
p
a
c
k
a
g
e
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
 
n
u
l
l
;

 
 
 
 
}

}

