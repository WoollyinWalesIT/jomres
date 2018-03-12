
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
 
i
s
 
c
u
r
r
e
n
t
l
y
 
a
v
a
i
l
a
b
l
e
 
f
o
r
 
u
s
e
 
i
n
 
a
l
l
 
p
e
r
s
o
n
a
l
 
o
r
 
c
o
m
m
e
r
c
i
a
l
 
p
r
o
j
e
c
t
s
 
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


i
f
 
(
d
e
f
i
n
e
d
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
)
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
i
v
e
_
s
i
t
e
'
,
 
s
t
r
_
r
e
p
l
a
c
e
(
'
/
j
o
m
r
e
s
/
'
,
 
'
/
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
)
)
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
J
O
M
R
E
S
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
w
p
-
a
d
m
i
n
'
)
;


/
/
l
e
t
`
s
 
f
i
n
d
 
i
f
 
w
e
 
h
a
v
e
 
s
o
m
e
 
l
a
n
g
u
a
g
e
 
s
e
t

$
c
u
r
r
e
n
t
B
l
o
g
L
a
n
g
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
_
'
,
 
'
-
'
,
 
g
e
t
_
l
o
c
a
l
e
(
)
)
;


$
k
e
y
w
o
r
d
 
=
 
'
[
j
o
m
r
e
s
:
'
.
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
c
u
r
r
e
n
t
B
l
o
g
L
a
n
g
)
.
'
]
'
;


/
/
f
i
n
d
 
j
o
m
r
e
s
 
i
t
e
m
i
d

$
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
i
d
 
=
 
0
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
)
)
 
{

 
 
 
 
$
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
i
d
 
=
 
0
;


 
 
 
 
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
I
D
`
 
F
R
O
M
 
#
_
_
p
o
s
t
s
 
W
H
E
R
E
 
L
O
W
E
R
(
`
p
o
s
t
_
c
o
n
t
e
n
t
`
)
 
L
I
K
E
 
'
%
"
.
$
k
e
y
w
o
r
d
.
"
%
'
 
A
N
D
 
`
p
o
s
t
_
s
t
a
t
u
s
`
 
=
 
'
p
u
b
l
i
s
h
'
 
A
N
D
 
`
p
o
s
t
_
t
y
p
e
`
 
=
 
'
p
a
g
e
'
 
L
I
M
I
T
 
1
"
;

 
 
 
 
$
i
t
e
m
Q
u
e
r
y
R
e
s
 
=
 
(
i
n
t
)
 
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


 
 
 
 
$
i
t
e
m
I
d
F
o
u
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
i
t
e
m
Q
u
e
r
y
R
e
s
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
$
i
t
e
m
I
d
F
o
u
n
d
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
$
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
i
d
 
=
 
$
i
t
e
m
Q
u
e
r
y
R
e
s
;

 
 
 
 
}

}


/
/
s
e
t
 
j
o
m
r
e
s
 
i
t
e
m
i
d

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
i
d
'
,
 
$
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
i
d
)
;


/
/
t
m
p
l

$
t
m
p
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
G
E
T
,
 
'
t
m
p
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
t
m
p
l
 
=
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
 
&
&
 
!
i
s
s
e
t
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
[
 
'
n
o
f
o
l
l
o
w
t
m
p
l
'
 
]
)
 
&
&
 
!
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
r
e
w
e
i
n
a
d
m
i
n
a
r
e
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
 
=
 
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
;

}


/
/
i
s
_
w
r
a
p
p
e
d

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
R
E
Q
U
E
S
T
[
 
'
i
s
_
w
r
a
p
p
e
d
'
 
]
)
)
 
{

 
 
 
 
i
f
 
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
[
 
'
i
s
_
w
r
a
p
p
e
d
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
m
p
l
 
.
=
 
'
&
i
s
_
w
r
a
p
p
e
d
=
1
'
;

 
 
 
 
}

}


/
/
m
e
n
u
o
f
f

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
R
E
Q
U
E
S
T
[
 
'
m
e
n
u
o
f
f
'
 
]
)
)
 
{

 
 
 
 
i
f
 
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
[
 
'
m
e
n
u
o
f
f
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
m
p
l
 
.
=
 
'
&
m
e
n
u
o
f
f
=
1
'
;

 
 
 
 
 
 
 
 
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
m
e
n
u
o
f
f
'
,
 
t
r
u
e
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
 
.
=
 
'
&
m
e
n
u
o
f
f
=
0
'
;

 
 
 
 
 
 
 
 
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
m
e
n
u
o
f
f
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

}


/
/
t
o
p
o
f
f

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
R
E
Q
U
E
S
T
[
 
'
t
o
p
o
f
f
'
 
]
)
)
 
{

 
 
 
 
i
f
 
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
[
 
'
t
o
p
o
f
f
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
m
p
l
 
.
=
 
'
&
t
o
p
o
f
f
=
1
'
;

 
 
 
 
 
 
 
 
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
t
o
p
o
f
f
'
,
 
t
r
u
e
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
 
.
=
 
'
&
t
o
p
o
f
f
=
0
'
;

 
 
 
 
 
 
 
 
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
t
o
p
o
f
f
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

}


/
/
c
m
s
 
l
a
n
g

$
l
a
n
g
 
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
G
E
T
,
 
'
l
a
n
g
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
l
a
n
g
 
!
=
 
'
'
)
 
{

 
 
 
 
$
l
a
n
g
 
=
 
'
&
l
a
n
g
=
'
.
s
u
b
s
t
r
(
$
l
a
n
g
,
 
0
,
 
2
)
;

}


/
/
J
o
m
r
e
s
 
s
p
e
c
i
f
i
c
 
l
a
n
g
 
s
w
i
t
c
h
i
n
g

$
l
a
n
g
_
p
a
r
a
m
 
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
R
E
Q
U
E
S
T
[
 
'
j
o
m
r
e
s
l
a
n
g
'
 
]
)
)
 
{

	
$
j
o
m
r
e
s
l
a
n
g
 
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
j
o
m
r
e
s
l
a
n
g
'
,
 
'
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
l
a
n
g
u
a
g
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
j
o
m
r
e
s
_
l
a
n
g
u
a
g
e
'
)
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
l
a
n
g
 
!
=
 
'
'
 
&
&
 
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
l
a
n
g
u
a
g
e
-
>
d
a
t
e
p
i
c
k
e
r
_
c
r
o
s
s
r
e
f
[
$
j
o
m
r
e
s
l
a
n
g
]
)
)
 
{

 
 
 
 
 
 
 
 
$
l
a
n
g
_
p
a
r
a
m
 
=
 
'
&
j
o
m
r
e
s
l
a
n
g
=
'
.
$
j
o
m
r
e
s
l
a
n
g
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
 
s
p
e
c
i
f
i
c
 
u
r
l
s

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
i
n
d
e
x
.
p
h
p
?
o
p
t
i
o
n
=
c
o
m
_
j
o
m
r
e
s
&
p
a
g
e
_
i
d
=
'
.
$
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
i
d
.
$
t
m
p
l
.
$
l
a
n
g
.
$
l
a
n
g
_
p
a
r
a
m
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
J
A
X
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
i
n
d
e
x
.
p
h
p
?
a
c
t
i
o
n
=
j
o
m
r
e
s
_
a
j
a
x
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
j
r
a
j
a
x
=
1
&
j
r
_
w
p
_
s
o
u
r
c
e
=
f
r
o
n
t
e
n
d
&
o
p
t
i
o
n
=
c
o
m
_
j
o
m
r
e
s
&
p
a
g
e
_
i
d
=
'
.
$
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
i
d
.
$
t
m
p
l
.
$
l
a
n
g
.
$
l
a
n
g
_
p
a
r
a
m
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
w
p
-
a
d
m
i
n
/
a
d
m
i
n
.
p
h
p
?
p
a
g
e
=
j
o
m
r
e
s
/
j
o
m
r
e
s
.
p
h
p
&
j
r
_
w
p
_
s
o
u
r
c
e
=
a
d
m
i
n
&
o
p
t
i
o
n
=
c
o
m
_
j
o
m
r
e
s
'
.
$
t
m
p
l
.
$
l
a
n
g
.
$
l
a
n
g
_
p
a
r
a
m
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
_
A
J
A
X
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
w
p
-
a
d
m
i
n
/
a
d
m
i
n
-
a
j
a
x
.
p
h
p
?
a
c
t
i
o
n
=
j
o
m
r
e
s
_
a
j
a
x
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
j
r
a
j
a
x
=
1
&
j
r
_
w
p
_
s
o
u
r
c
e
=
a
d
m
i
n
&
o
p
t
i
o
n
=
c
o
m
_
j
o
m
r
e
s
'
.
$
t
m
p
l
.
$
l
a
n
g
.
$
l
a
n
g
_
p
a
r
a
m
)
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
s
e
f
'
)
 
=
=
 
'
1
'
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
'
,
 
g
e
t
_
p
e
r
m
a
l
i
n
k
(
$
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
i
d
)
.
'
?
o
p
t
i
o
n
=
c
o
m
_
j
o
m
r
e
s
'
.
$
t
m
p
l
.
$
l
a
n
g
.
$
l
a
n
g
_
p
a
r
a
m
)
;

}
 
e
l
s
e
 
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
i
n
d
e
x
.
p
h
p
?
o
p
t
i
o
n
=
c
o
m
_
j
o
m
r
e
s
&
p
a
g
e
_
i
d
=
'
.
$
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
i
d
.
$
t
m
p
l
.
$
l
a
n
g
.
$
l
a
n
g
_
p
a
r
a
m
)
;

}

