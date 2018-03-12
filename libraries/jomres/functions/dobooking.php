
<
?
p
h
p

/
*
*

 
*
 
B
u
i
l
d
s
 
t
h
e
 
b
o
o
k
i
n
g
 
f
o
r
m

 
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


/
*
*

 
*
 
G
e
t
 
s
o
m
e
 
b
a
s
i
c
 
d
a
t
a
 
b
e
f
o
r
e
 
b
e
g
i
n
n
i
n
g
 
c
o
n
s
t
r
u
c
t
i
o
n
 
o
f
 
t
h
e
 
b
o
o
k
i
n
g
 
f
o
r
m
.

 
*
/

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
0
1
0
0
'
)
;
 
/
/
 
P
r
e
-
d
o
b
o
o
k
i
n
g
.
 
O
p
t
i
o
n
a
l


/
*
*

 
*
 
I
f
 
t
h
e
 
u
s
e
r
 
i
s
 
a
 
m
a
n
a
g
e
r
 
t
h
e
n
 
w
e
 
w
i
l
l
 
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
 
t
h
e
y
 
a
r
e
 
b
o
o
k
i
n
g
 
o
n
e
 
o
f
 
t
h
e
i
r
 
o
w
n
 
p
r
o
p
e
r
t
i
e
s
.
 
T
h
e
y
 
c
a
n
n
o
t
 
b
o
o
k
 
a
 
p
r
o
p
e
r
t
y
 
t
h
a
t
'
s
 
n
o
t
 
t
h
e
i
r
s
,
 
w
h
i
l
e
 
l
o
g
g
e
d
 
i
n
 
a
s
 
a
 
m
a
n
a
g
e
r
.

 
*
/

i
f
 
(

 
 
 
 
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
 
>
 
0
 
&
&

 
 
 
 
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
,
 
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
a
u
t
h
o
r
i
s
e
d
P
r
o
p
e
r
t
i
e
s
)
 
&
&

 
 
 
 
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
c
u
r
r
e
n
t
p
r
o
p
e
r
t
y
 
!
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

	
)
 
{

 
 
 
 
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
e
t
_
c
u
r
r
e
n
t
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
)
;

 
 
 
 
j
o
m
r
e
s
R
e
d
i
r
e
c
t
(
g
e
t
_
b
o
o
k
i
n
g
_
u
r
l
(
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
)
,
 
'
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
A
P
I
_
C
M
S
_
R
O
O
T
'
)
)
 
{

	
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

}



$
r
e
m
u
s
 
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
r
e
m
u
s
'
,
 
'
'
)
;


$
t
h
i
s
d
a
t
e
 
=
 
f
a
l
s
e
;


$
t
o
d
a
y
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
)
;

$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
t
o
d
a
y
)
;

$
u
n
i
x
T
o
d
a
y
s
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;


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
s
e
a
r
c
h
_
d
a
t
a
[
 
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
'
 
]
)
)
 
{

 
 
 
 
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
s
e
a
r
c
h
_
d
a
t
a
[
 
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
'
 
]
 
=
 
"
"
;

}


/
*
*

 
*
 
I
f
 
t
h
e
 
a
r
r
i
v
a
l
 
d
a
t
e
 
i
s
 
s
e
t
 
i
n
 
o
n
e
 
o
f
 
s
e
v
e
r
a
l
 
d
i
f
f
e
r
e
n
t
 
p
l
a
c
e
s
 
(
e
.
g
.
 
t
h
e
 
u
r
l
 
o
r
 
s
t
o
r
e
d
 
a
s
 
t
h
e
 
r
e
s
u
l
t
 
o
f
 
a
 
s
e
a
r
c
h
)
 
t
h
e
n
 
s
e
t
 
t
h
e
 
a
r
r
i
v
a
l
 
d
a
t
e
 
i
n
 
t
h
e
 
f
o
r
m
.

 
*
/

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
a
r
r
i
v
a
l
D
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
s
e
a
r
c
h
_
d
a
t
a
[
 
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
'
 
]
)
 
&
&
 
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
s
e
a
r
c
h
_
d
a
t
a
[
 
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
'
 
]
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
$
a
r
r
i
v
a
l
D
a
t
e
 
=
 
J
S
C
a
l
m
a
k
e
I
n
p
u
t
D
a
t
e
s
(
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
$
u
n
i
x
T
o
d
a
y
s
D
a
t
e
)
,
 
$
s
i
t
e
C
a
l
 
=
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
$
t
h
i
s
d
a
t
e
 
=
 
J
S
C
a
l
C
o
n
v
e
r
t
I
n
p
u
t
D
a
t
e
s
(
$
a
r
r
i
v
a
l
D
a
t
e
,
 
$
s
i
t
e
C
a
l
 
=
 
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
h
i
s
d
a
t
e
 
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
s
e
a
r
c
h
_
d
a
t
a
[
 
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
'
 
]
;

 
 
 
 
}

}
 
e
l
s
e
 
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
b
o
o
k
i
n
g
[
 
'
c
o
n
f
i
r
m
a
t
i
o
n
S
e
e
n
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
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
b
o
o
k
i
n
g
[
 
'
c
o
n
f
i
r
m
a
t
i
o
n
S
e
e
n
'
 
]
 
=
 
n
u
l
l
;

 
 
 
 
}

 
 
 
 
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
p
d
e
t
a
i
l
s
_
c
a
l
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
d
a
t
e
 
=
 
J
S
C
a
l
C
o
n
v
e
r
t
I
n
p
u
t
D
a
t
e
s
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
a
r
r
i
v
a
l
D
a
t
e
'
,
 
'
'
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
b
a
n
g
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
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
a
r
r
i
v
a
l
D
a
t
e
'
 
]
)
;

 
 
 
 
 
 
 
 
$
t
h
i
s
d
a
t
e
 
=
 
(
i
n
t
)
 
$
b
a
n
g
[
 
0
 
]
.
'
/
'
.
(
i
n
t
)
 
$
b
a
n
g
[
 
1
 
]
.
'
/
'
.
(
i
n
t
)
 
$
b
a
n
g
[
 
2
 
]
;

 
 
 
 
}

}


$
t
h
i
s
d
a
t
e
 
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
-
'
,
 
'
/
'
,
 
$
t
h
i
s
d
a
t
e
)
;


/
*
*

 
*
 
I
f
 
t
h
e
 
u
s
e
r
 
i
s
 
c
o
n
f
i
g
u
r
e
d
 
a
s
 
a
 
p
a
r
t
n
e
r
,
 
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
 
t
h
e
 
p
r
o
p
e
r
t
y
 
t
h
e
y
 
a
r
e
 
b
o
o
k
i
n
g
 
i
s
 
o
n
e
 
o
f
 
t
h
e
 
p
r
o
p
e
r
t
i
e
s
 
t
h
a
t
 
t
h
e
y
 
a
r
e
 
c
o
n
f
i
g
u
r
e
d
 
t
o
 
b
e
 
a
 
p
a
r
t
n
e
r
 
o
f
.
 
I
f
 
t
h
e
i
r
 
d
e
t
a
i
l
s
 
h
a
v
e
 
n
o
t
 
b
e
e
n
 
c
o
m
p
l
e
t
e
d
 
i
n
 
t
h
e
 
E
d
i
t
 
A
c
c
o
u
n
t
 
p
a
g
e
 
t
h
e
n
 
t
h
e
y
 
w
i
l
l
 
b
e
 
r
e
d
i
r
e
c
t
e
d
 
t
o
 
t
h
a
t
 
p
a
g
e
 
f
i
r
s
t
.

 
*
/

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
s
_
p
a
r
t
n
e
r
)
 
{

 
 
 
 
$
p
a
r
t
n
e
r
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
p
a
r
t
n
e
r
s
'
)
;

 
 
 
 
$
d
e
t
a
i
l
s
_
c
o
m
p
l
e
t
e
 
=
 
$
p
a
r
t
n
e
r
s
-
>
c
h
e
c
k
_
p
a
r
t
n
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
_
c
o
m
p
l
e
t
e
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
)
;

 
 
 
 
i
f
 
(
!
$
d
e
t
a
i
l
s
_
c
o
m
p
l
e
t
e
)
 
{

 
 
 
 
 
 
 
 
j
o
m
r
e
s
R
e
d
i
r
e
c
t
(
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
m
y
_
a
c
c
o
u
n
t
'
)
,
 
'
'
)
;

 
 
 
 
}

}


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
0
1
0
1
'
)
;
 
/
/
 
P
r
e
-
f
o
r
m
 
g
e
n
e
r
a
t
i
o
n
.
 
O
p
t
i
o
n
a
l


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
 
p
r
o
p
e
r
t
y
s
_
u
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
 
W
H
E
R
E
 
p
r
o
p
e
r
t
y
s
_
u
i
d
 
=
 
'
"
.
(
i
n
t
)
 
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
.
"
'
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
!
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

 
 
 
 
i
f
 
(
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
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
d
o
b
o
o
k
i
n
g
(
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
,
 
$
t
h
i
s
d
a
t
e
,
 
$
r
e
m
u
s
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
P
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
 
i
n
c
o
r
r
e
c
t
'
;

 
 
 
 
}

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
I
n
c
o
r
r
e
c
t
 
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
 
s
e
l
e
c
t
e
d
'
;

}

/
/
 
E
n
d
 
r
u
n
 
h
e
r
e
.


/
*
*

 
*
 
C
o
n
s
t
r
u
c
t
 
t
h
e
 
b
o
o
k
i
n
g
 
f
o
r
m
.

 
*
/

f
u
n
c
t
i
o
n
 
d
o
b
o
o
k
i
n
g
(
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
,
 
$
t
h
i
s
d
a
t
e
,
 
$
r
e
m
u
s
)

{

 
 
 
 
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
 
>
 
0
 
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
r
p
o
r
t
a
l
_
g
u
e
s
t
s
'
 
)
;

 
 
 
 
 
 
 
 
$
j
r
p
o
r
t
a
l
_
g
u
e
s
t
s
 
=
 
n
e
w
 
j
r
p
o
r
t
a
l
_
g
u
e
s
t
s
(
)
;

 
 
 
 
 
 
 
 
$
j
r
p
o
r
t
a
l
_
g
u
e
s
t
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

 
 
 
 
 
 
 
 
$
p
r
e
v
i
o
u
s
_
g
u
e
s
t
_
u
i
d
 
=
 
$
j
r
p
o
r
t
a
l
_
g
u
e
s
t
s
-
>
g
e
t
_
g
u
e
s
t
_
i
d
_
b
y
_
c
m
s
_
i
d
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
)
;
 
/
/
 
L
e
t
Â
´
s
 
s
e
e
 
i
f
 
t
h
i
s
 
u
s
e
r
 
h
a
s
 
b
e
e
n
 
a
 
g
u
e
s
t
 
o
f
 
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
 
b
e
f
o
r
e

 
 
 
 
 
 
 
 
i
f
 
(
$
p
r
e
v
i
o
u
s
_
g
u
e
s
t
_
u
i
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
p
o
r
t
a
l
_
g
u
e
s
t
s
-
>
i
d
 
=
 
$
p
r
e
v
i
o
u
s
_
g
u
e
s
t
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
p
o
r
t
a
l
_
g
u
e
s
t
s
-
>
g
e
t
_
g
u
e
s
t
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
j
r
p
o
r
t
a
l
_
g
u
e
s
t
s
-
>
b
l
a
c
k
l
i
s
t
e
d
 
=
=
 
1
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
j
o
m
r
e
s
R
e
d
i
r
e
c
t
(
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
.
'
&
t
a
s
k
=
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
&
a
m
p
;
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
'
.
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
.
'
&
a
m
p
;
a
r
r
i
v
a
l
D
a
t
e
=
'
.
$
t
h
i
s
d
a
t
e
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}

 
 
 
 

 
 
 
 
 
 
 
 

 
 
 
 
$
b
a
c
k
W
a
s
C
l
i
c
k
e
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
b
o
o
k
i
n
g
[
 
'
c
o
n
f
i
r
m
a
t
i
o
n
S
e
e
n
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

 
 
 
 
 
 
 
 
$
b
a
c
k
W
a
s
C
l
i
c
k
e
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
 
=
=
 
t
r
u
e
)
 
{

 
 
 
 
 
 
 
 
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
r
e
s
e
t
T
e
m
p
G
u
e
s
t
D
a
t
a
(
)
;

 
 
 
 
}
 
/
/
 
W
e
 
d
o
n
'
t
 
w
a
n
t
 
m
a
n
a
g
e
r
s
 
c
o
m
i
n
g
 
b
a
c
k
 
t
o
 
t
h
e
 
b
o
o
k
i
n
g
 
f
o
r
m
 
w
i
t
h
 
t
h
e
 
o
l
d
 
g
u
e
s
t
 
d
a
t
a
 
s
t
i
l
l
 
s
a
v
e
d
.

 
 
 
 
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
u
p
d
a
t
e
B
o
o
k
i
n
g
F
i
e
l
d
(
'
l
a
n
g
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
a
n
g
'
)
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
g
e
t
B
o
o
k
i
n
g
P
r
o
p
e
r
t
y
I
d
(
)
 
!
=
 
(
i
n
t
)
 
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
)
 
{

 
 
 
 
 
 
 
 
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
r
e
s
e
t
T
e
m
p
B
o
o
k
i
n
g
D
a
t
a
(
)
;

 
 
 
 
}

 
 
 
 
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
b
o
o
k
i
n
g
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
 
=
 
(
i
n
t
)
 
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
b
o
o
k
i
n
g
[
 
'
t
o
t
a
l
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
 
=
 
'
'
;


 
 
 
 
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
 
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
g
e
t
B
o
o
k
i
n
g
F
i
e
l
d
V
a
l
(
'
a
m
e
n
d
_
c
o
n
t
r
a
c
t
'
)
;


 
 
 
 
i
f
 
(
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
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
c
o
n
t
r
a
c
t
u
i
d
'
 
]
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
c
a
n
_
m
o
d
i
f
y
_
t
h
i
s
_
b
o
o
k
i
n
g
(
(
i
n
t
)
 
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
c
o
n
t
r
a
c
t
u
i
d
'
 
]
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
r
e
s
e
t
T
e
m
p
B
o
o
k
i
n
g
D
a
t
a
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
-
>
r
e
s
e
t
T
e
m
p
G
u
e
s
t
D
a
t
a
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
-
>
r
e
s
e
t
C
r
e
d
i
t
C
a
r
d
D
e
t
a
i
l
s
(
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
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
b
o
o
k
i
n
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
r
o
o
m
_
t
o
t
a
l
'
 
]
 
=
 
n
u
l
l
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
-
>
t
m
p
b
o
o
k
i
n
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
d
e
p
o
s
i
t
'
 
]
 
=
 
n
u
l
l
;


 
 
 
 
$
t
o
d
a
y
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
)
;

 
 
 
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
t
o
d
a
y
)
;

 
 
 
 
$
u
n
i
x
T
o
m
o
r
r
o
w
s
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
 
+
 
1
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;

 
 
 
 
$
u
n
i
x
T
o
d
a
y
s
D
a
t
e
 
=
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
1
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
2
 
]
,
 
$
d
a
t
e
_
e
l
e
m
e
n
t
s
[
 
0
 
]
)
;


 
 
 
 
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
)
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
i
s
_
s
i
n
g
l
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
'
 
]
 
=
=
 
'
0
'
 
&
&
 
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
D
O
B
O
O
K
I
N
G
_
I
N
_
D
E
T
A
I
L
S
'
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
)
;

 
 
 
 
}


 
 
 
 
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
i
n
c
l
u
d
e
_
r
o
o
m
_
b
o
o
k
i
n
g
_
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
'
)
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
S
E
L
E
C
T
 
`
r
a
t
e
s
_
u
i
d
`
 
F
R
O
M
 
`
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
r
a
t
e
s
`
 
w
h
e
r
e
 
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

 
 
 
 
 
 
 
 
 
 
 
 
j
o
m
r
e
s
R
e
d
i
r
e
c
t
(
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
.
'
&
t
a
s
k
=
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
&
a
m
p
;
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
'
.
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
.
'
&
a
m
p
;
a
r
r
i
v
a
l
D
a
t
e
=
'
.
$
t
h
i
s
d
a
t
e
)
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
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
0
1
0
2
'
)
;
 
/
/
 
F
i
r
s
t
-
f
o
r
m
 
g
e
n
e
r
a
t
i
o
n

 
 
 
 
$
b
k
g
 
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
5
0
0
0
'
)
;
 
/
/
 
C
r
e
a
t
e
 
t
h
e
 
b
o
o
k
i
n
g
 
o
b
j
e
c
t


 
 
 
 
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
i
n
c
l
u
d
e
_
r
o
o
m
_
b
o
o
k
i
n
g
_
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
'
)
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
n
u
l
l
(
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
r
o
o
m
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
j
o
m
r
e
s
R
e
d
i
r
e
c
t
(
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
.
'
&
t
a
s
k
=
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
&
a
m
p
;
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
'
.
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
.
'
&
a
m
p
;
a
r
r
i
v
a
l
D
a
t
e
=
'
.
$
t
h
i
s
d
a
t
e
)
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
b
k
g
-
>
a
l
l
P
r
o
p
e
r
t
y
T
a
r
i
f
f
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
j
o
m
r
e
s
R
e
d
i
r
e
c
t
(
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
.
'
&
t
a
s
k
=
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
&
a
m
p
;
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
'
.
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
.
'
&
a
m
p
;
a
r
r
i
v
a
l
D
a
t
e
=
'
.
$
t
h
i
s
d
a
t
e
)
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
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
i
s
_
j
i
n
t
o
u
r
_
p
r
o
p
e
r
t
y
'
)
)
 
{

 
 
 
 
 
 
 
 
$
t
o
u
r
s
 
=
 
j
i
n
t
o
u
r
_
g
e
t
_
a
l
l
_
t
o
u
r
s
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

 
 
 
 
 
 
 
 
$
f
u
t
u
r
e
_
t
o
u
r
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
o
d
a
y
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
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
t
o
u
r
s
 
a
s
 
$
t
o
u
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
e
m
p
A
r
r
 
=
 
e
x
p
l
o
d
e
(
'
-
'
,
 
$
t
o
u
r
[
'
t
o
u
r
d
a
t
e
'
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
o
u
r
d
a
t
e
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
,
 
m
k
t
i
m
e
(
0
,
 
0
,
 
0
,
 
$
t
e
m
p
A
r
r
[
1
]
,
 
$
t
e
m
p
A
r
r
[
2
]
,
 
$
t
e
m
p
A
r
r
[
0
]
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
t
o
t
i
m
e
(
$
t
o
d
a
y
)
 
<
 
s
t
r
t
o
t
i
m
e
(
$
t
o
u
r
d
a
t
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
u
t
u
r
e
_
t
o
u
r
s
[
]
 
=
 
$
t
o
u
r
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
f
u
t
u
r
e
_
t
o
u
r
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
j
o
m
r
e
s
R
e
d
i
r
e
c
t
(
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
.
'
&
t
a
s
k
=
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
&
a
m
p
;
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
'
.
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
.
'
&
a
m
p
;
a
r
r
i
v
a
l
D
a
t
e
=
'
.
$
t
h
i
s
d
a
t
e
)
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
$
b
k
g
-
>
r
o
o
m
_
f
e
a
t
u
r
e
_
f
i
l
t
e
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

 
 
 
 
i
f
 
(
!
i
s
_
o
b
j
e
c
t
(
$
b
k
g
)
)
 
{

 
 
 
 
 
 
 
 
e
c
h
o
 
'
E
r
r
o
r
 
c
r
e
a
t
i
n
g
 
b
o
o
k
i
n
g
 
o
b
j
e
c
t
'
;


 
 
 
 
 
 
 
 
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
 
i
f
 
(
!
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
i
n
c
l
u
d
e
_
r
o
o
m
_
b
o
o
k
i
n
g
_
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
'
)
)
 
 
/
/
 
D
i
s
a
b
l
e
d
 
f
o
r
 
5
.
5
.
3
 
a
s
 
J
i
n
t
o
u
r
 
h
a
s
 
a
 
n
e
w
 
o
p
t
i
o
n
 
t
h
a
t
 
m
a
n
a
g
e
s
 
t
h
i
s

 
 
 
 
/
/
 
$
b
k
g
-
>
c
f
g
_
s
h
o
w
d
e
p
a
r
t
u
r
e
i
n
p
u
t
 
=
 
"
0
"
;


 
 
 
 
$
t
e
x
t
 
=
 
$
b
k
g
-
>
m
a
k
e
O
u
t
p
u
t
T
e
x
t
(
)
;

 
 
 
 
$
g
u
e
s
t
 
=
 
$
b
k
g
-
>
m
a
k
e
G
u
e
s
t
D
a
t
a
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
_
m
e
r
g
e
(
$
t
e
x
t
,
 
$
g
u
e
s
t
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
R
E
G
I
O
N
_
D
R
O
P
D
O
W
N
'
 
]
 
=
 
s
e
t
u
p
R
e
g
i
o
n
s
(
$
b
k
g
-
>
c
o
u
n
t
r
y
,
 
$
b
k
g
-
>
r
e
g
i
o
n
)
;

 
 
 
 
i
f
 
(
$
b
k
g
-
>
c
f
g
_
s
h
o
w
d
e
p
a
r
t
u
r
e
i
n
p
u
t
 
=
=
 
'
0
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
H
D
E
P
A
R
T
U
R
E
D
A
T
E
'
 
]
 
=
 
'
'
;

 
 
 
 
}


 
 
 
 
$
r
e
q
u
i
r
e
d
I
c
o
n
s
 
=
 
$
b
k
g
-
>
m
a
k
e
R
e
q
u
i
r
e
d
I
c
o
n
s
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
_
m
e
r
g
e
(
$
o
u
t
p
u
t
,
 
$
r
e
q
u
i
r
e
d
I
c
o
n
s
)
;

 
 
 
 
$
g
u
e
s
t
T
y
p
e
s
 
=
 
$
b
k
g
-
>
m
a
k
e
C
u
s
t
o
m
e
r
T
y
p
e
s
(
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
U
P
D
A
T
E
A
D
D
R
E
S
S
B
U
T
T
O
N
'
 
]
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
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
F
O
R
M
_
U
P
D
A
T
E
A
D
D
R
E
S
S
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
B
O
O
K
I
N
G
F
O
R
M
_
U
P
D
A
T
E
A
D
D
R
E
S
S
B
U
T
T
O
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
)
;

 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
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
o
u
t
p
u
t
[
 
'
B
L
O
C
K
U
I
_
R
E
C
H
E
C
K
I
N
G
R
O
O
M
A
V
A
I
L
A
B
I
L
I
T
Y
'
 
]
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
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
F
O
R
M
_
B
L
O
C
K
U
I
M
E
S
S
A
G
E
S
_
R
E
C
H
E
C
K
I
N
G
R
O
O
M
A
V
I
A
L
A
B
I
L
I
T
Y
_
S
R
P
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
F
O
R
M
_
B
L
O
C
K
U
I
M
E
S
S
A
G
E
S
_
R
E
C
H
E
C
K
I
N
G
R
O
O
M
A
V
I
A
L
A
B
I
L
I
T
Y
_
S
R
P
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
)
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
B
L
O
C
K
U
I
_
R
E
C
H
E
C
K
I
N
G
R
O
O
M
A
V
A
I
L
A
B
I
L
I
T
Y
'
 
]
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
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
F
O
R
M
_
B
L
O
C
K
U
I
M
E
S
S
A
G
E
S
_
R
E
C
H
E
C
K
I
N
G
R
O
O
M
A
V
I
A
L
A
B
I
L
I
T
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
B
O
O
K
I
N
G
F
O
R
M
_
B
L
O
C
K
U
I
M
E
S
S
A
G
E
S
_
R
E
C
H
E
C
K
I
N
G
R
O
O
M
A
V
I
A
L
A
B
I
L
I
T
Y
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
B
O
O
K
I
N
G
_
F
O
R
M
_
C
A
L
E
N
D
A
R
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
b
o
o
k
i
n
g
_
f
o
r
m
_
c
a
l
e
n
d
a
r
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
A
_
A
V
L
C
A
L
'
 
]
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
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
A
_
A
V
L
C
A
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
A
_
A
V
L
C
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
F
R
O
N
T
_
M
R
_
S
U
B
M
I
T
B
U
T
T
O
N
_
C
H
E
C
K
A
V
A
I
L
A
B
I
L
I
T
Y
'
 
]
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
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
S
U
B
M
I
T
B
U
T
T
O
N
_
C
H
E
C
K
A
V
A
I
L
A
B
I
L
I
T
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
S
U
B
M
I
T
B
U
T
T
O
N
_
C
H
E
C
K
A
V
A
I
L
A
B
I
L
I
T
Y
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
)
;

	

	
/
/
 
P
r
e
v
i
o
u
s
 
o
u
t
p
u
t
s
 
f
o
r
 
A
v
a
i
l
a
b
i
l
i
t
y
 
c
a
l
e
n
d
a
r
 
l
e
f
t
 
i
n
-
s
i
t
u
 
f
o
r
 
o
l
d
e
r
 
c
o
p
i
e
s
 
o
f
 
t
h
e
 
d
o
b
o
o
k
i
n
g
 
t
e
m
p
l
a
t
e
.

	
$
c
a
l
e
n
d
a
r
_
m
o
d
a
l
 
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
m
r
C
o
n
f
i
g
[
 
'
s
h
o
w
A
v
a
i
l
a
b
i
l
i
t
y
C
a
l
e
n
d
a
r
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
c
a
l
e
n
d
a
r
_
m
o
d
a
l
 
=
 
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
B
O
O
K
I
N
G
_
F
O
R
M
_
C
A
L
E
N
D
A
R
'
 
=
>
 
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
F
O
R
M
_
C
A
L
E
N
D
A
R
'
 
]
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
A
_
A
V
L
C
A
L
'
 
=
>
 
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
C
O
M
_
A
_
A
V
L
C
A
L
'
 
]
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
S
U
B
M
I
T
B
U
T
T
O
N
_
C
H
E
C
K
A
V
A
I
L
A
B
I
L
I
T
Y
'
 
=
>
 
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
F
R
O
N
T
_
M
R
_
S
U
B
M
I
T
B
U
T
T
O
N
_
C
H
E
C
K
A
V
A
I
L
A
B
I
L
I
T
Y
'
 
]

	
	
	
)

	
	
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
B
L
O
C
K
U
I
_
C
H
A
N
G
I
N
G
E
X
T
R
A
'
 
]
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
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
F
O
R
M
_
B
L
O
C
K
U
I
M
E
S
S
A
G
E
S
_
C
H
A
N
G
I
N
G
E
X
T
R
A
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
F
O
R
M
_
B
L
O
C
K
U
I
M
E
S
S
A
G
E
S
_
C
H
A
N
G
I
N
G
E
X
T
R
A
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
L
O
C
K
U
I
_
C
H
A
N
G
I
N
G
R
O
O
M
S
E
L
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
b
k
g
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
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
F
O
R
M
_
B
L
O
C
K
U
I
M
E
S
S
A
G
E
S
_
C
H
A
N
G
I
N
G
R
O
O
M
S
E
L
E
C
T
I
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
B
O
O
K
I
N
G
F
O
R
M
_
B
L
O
C
K
U
I
M
E
S
S
A
G
E
S
_
C
H
A
N
G
I
N
G
R
O
O
M
S
E
L
E
C
T
I
O
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
L
O
C
K
U
I
_
U
P
D
A
T
I
N
G
A
D
D
R
E
S
S
'
 
]
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
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
F
O
R
M
_
B
L
O
C
K
U
I
M
E
S
S
A
G
E
S
_
U
P
D
A
T
I
N
G
A
D
D
R
E
S
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
B
O
O
K
I
N
G
F
O
R
M
_
B
L
O
C
K
U
I
M
E
S
S
A
G
E
S
_
U
P
D
A
T
I
N
G
A
D
D
R
E
S
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
L
O
C
K
U
I
_
A
D
D
R
E
S
S
I
N
P
U
T
E
R
R
O
R
'
 
]
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
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
F
O
R
M
_
B
L
O
C
K
U
I
M
E
S
S
A
G
E
S
_
A
D
D
R
E
S
S
I
N
P
U
T
E
R
R
O
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
F
O
R
M
_
B
L
O
C
K
U
I
M
E
S
S
A
G
E
S
_
A
D
D
R
E
S
S
I
N
P
U
T
E
R
R
O
R
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
N
O
R
O
O
M
S
S
E
L
E
C
T
E
D
Y
E
T
M
E
S
S
A
G
E
'
 
]
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
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
F
O
R
M
_
N
O
R
O
O
M
S
S
E
L
E
C
T
E
D
Y
E
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
B
O
O
K
I
N
G
F
O
R
M
_
N
O
R
O
O
M
S
S
E
L
E
C
T
E
D
Y
E
T
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
I
S
M
A
N
A
G
E
R
'
 
]
 
=
 
'
t
r
u
e
'
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
I
S
M
A
N
A
G
E
R
'
 
]
 
=
 
'
f
a
l
s
e
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
P
I
D
'
 
]
 
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
E
L
P
A
T
H
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
A
J
A
X
U
R
L
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
A
J
A
X
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
U
B
M
I
T
U
R
L
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
.
'
&
t
a
s
k
=
c
o
n
f
i
r
m
b
o
o
k
i
n
g
'
)
;


 
 
 
 
$
b
k
g
-
>
i
n
i
t
C
o
u
p
o
n
s
(
)
;

 
 
 
 
$
c
o
u
p
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
c
o
u
p
o
n
_
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
c
o
u
p
o
n
_
o
u
t
p
u
t
_
t
o
t
a
l
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
c
o
u
p
o
n
s
_
t
o
t
a
l
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


 
 
 
 
i
f
 
(
$
b
k
g
-
>
u
s
e
_
c
o
u
p
o
n
s
)
 
{

 
 
 
 
 
 
 
 
$
c
o
u
p
o
n
_
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
U
P
O
N
_
T
I
T
L
E
'
 
]
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
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
C
O
U
P
O
N
S
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
C
O
U
P
O
N
S
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
c
o
u
p
o
n
_
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
U
P
O
N
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
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
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
A
J
A
X
F
O
R
M
_
C
O
U
P
O
N
_
A
P
P
L
Y
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
A
J
A
X
F
O
R
M
_
C
O
U
P
O
N
_
A
P
P
L
Y
B
U
T
T
O
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
)
;

 
 
 
 
 
 
 
 
$
c
o
u
p
o
n
_
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
U
P
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
'
 
]
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
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
A
J
A
X
F
O
R
M
_
C
O
U
P
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
A
J
A
X
F
O
R
M
_
C
O
U
P
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
'
)
)
;

 
 
 
 
 
 
 
 
$
c
o
u
p
o
n
_
o
u
t
p
u
t
_
t
o
t
a
l
s
[
 
'
C
O
U
P
O
N
_
D
I
S
C
O
U
N
T
_
V
A
L
U
E
'
 
]
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
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
A
J
A
X
F
O
R
M
_
C
O
U
P
O
N
_
D
I
S
C
O
U
N
T
V
A
L
U
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
A
J
A
X
F
O
R
M
_
C
O
U
P
O
N
_
D
I
S
C
O
U
N
T
V
A
L
U
E
'
)
)
;


 
 
 
 
 
 
 
 
$
c
o
u
p
o
n
 
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
c
o
u
p
o
n
'
,
 
'
'
)
;


 
 
 
 
 
 
 
 
$
c
o
u
p
o
n
_
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
U
P
O
N
_
C
O
D
E
'
 
]
 
=
 
$
c
o
u
p
o
n
;


 
 
 
 
 
 
 
 
i
f
 
(
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
 
&
&
 
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
c
o
n
t
r
a
c
t
u
i
d
'
 
]
)
 
&
&
 
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
 
i
n
_
a
r
r
a
y
(
(
i
n
t
)
 
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
,
 
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
a
u
t
h
o
r
i
s
e
d
P
r
o
p
e
r
t
i
e
s
)
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
S
E
L
E
C
T
 
c
o
u
p
o
n
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
(
i
n
t
)
 
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
c
o
n
t
r
a
c
t
u
i
d
'
 
]
.
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
u
p
o
n
_
i
d
 
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
$
c
o
u
p
o
n
_
i
d
 
>
 
0
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
S
E
L
E
C
T
 
`
c
o
u
p
o
n
_
c
o
d
e
`
 
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
u
p
o
n
s
 
W
H
E
R
E
 
c
o
u
p
o
n
_
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
c
o
u
p
o
n
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
(
i
n
t
)
 
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
.
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
u
p
o
n
_
c
o
d
e
 
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
a
v
e
C
o
u
p
o
n
(
$
c
o
u
p
o
n
_
c
o
d
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
u
p
o
n
_
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
U
P
O
N
_
C
O
D
E
'
 
]
 
=
 
$
c
o
u
p
o
n
_
c
o
d
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
b
k
g
-
>
s
a
v
e
C
o
u
p
o
n
(
$
c
o
u
p
o
n
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
c
o
u
p
o
n
s
[
 
]
 
=
 
$
c
o
u
p
o
n
_
o
u
t
p
u
t
;

 
 
 
 
 
 
 
 
$
c
o
u
p
o
n
s
_
t
o
t
a
l
s
[
 
]
 
=
 
$
c
o
u
p
o
n
_
o
u
t
p
u
t
_
t
o
t
a
l
s
;

 
 
 
 
}


 
 
 
 
i
f
 
(
$
b
k
g
-
>
c
f
g
_
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
 
!
=
 
'
1
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
S
E
L
E
C
T
R
O
O
M
M
E
S
S
A
G
E
'
 
]
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
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
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
S
E
L
E
C
T
_
A
_
R
O
O
M
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
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
S
E
L
E
C
T
_
A
_
R
O
O
M
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
)
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
S
E
L
E
C
T
R
O
O
M
M
E
S
S
A
G
E
'
 
]
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
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
Q
U
I
C
K
R
E
S
_
S
T
E
P
4
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
M
R
_
Q
U
I
C
K
R
E
S
_
S
T
E
P
4
_
T
I
T
L
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
)
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
m
r
C
o
n
f
i
g
[
 
'
m
i
n
i
m
u
m
i
n
t
e
r
v
a
l
'
 
]
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
$
m
r
C
o
n
f
i
g
[
 
'
m
i
n
i
m
u
m
i
n
t
e
r
v
a
l
'
 
]
 
=
 
1
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
M
I
N
I
N
T
E
R
V
A
L
'
 
]
 
=
 
$
m
r
C
o
n
f
i
g
[
 
'
m
i
n
i
m
u
m
i
n
t
e
r
v
a
l
'
 
]
.
'
 
;
 
v
a
r
 
s
e
l
e
c
t
r
o
o
m
m
e
s
s
a
g
e
 
=
 
"
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
S
E
L
E
C
T
R
O
O
M
M
E
S
S
A
G
E
'
 
]
.
'
"
'
;
 
/
/
F
o
r
 
b
a
c
k
w
a
r
d
 
c
o
m
p
a
t
a
b
i
l
i
t
y
 
t
h
i
s
 
s
e
l
e
c
t
r
o
o
m
m
e
s
s
a
g
e
 
h
a
s
 
b
e
e
n
 
t
a
c
k
e
d
 
o
n
t
o
 
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
e
 
m
i
n
 
i
n
t
e
r
v
a
l
 
v
a
r
 
d
e
f
i
n
i
t
i
o
n

 
 
 
 
/
/
i
f
 
(
!
$
b
k
g
-
>
o
k
_
t
o
_
b
o
o
k
 
|
|
 
$
b
k
g
-
>
c
f
g
_
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
 
=
=
 
"
1
"
)

 
 
 
 
$
b
k
g
-
>
r
e
s
e
t
R
e
q
u
e
s
t
e
d
R
o
o
m
(
)
;

 
 
 
 
$
b
k
g
-
>
i
n
i
t
G
u
e
s
t
D
e
t
a
i
l
s
(
$
b
k
g
,
 
$
g
u
e
s
t
)
;


 
 
 
 
i
f
 
(
$
b
k
g
-
>
g
u
e
s
t
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
d
i
s
c
o
u
n
t
 
>
 
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
P
E
R
S
O
N
A
L
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
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
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
P
E
R
S
O
N
A
L
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
O
M
R
E
S
_
P
E
R
S
O
N
A
L
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
)
;

 
 
 
 
}


 
 
 
 
$
o
v
e
r
r
i
d
e
S
e
s
s
i
o
n
A
r
r
i
v
a
l
D
a
t
e
 
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
t
h
i
s
d
a
t
e
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
$
o
v
e
r
r
i
d
e
S
e
s
s
i
o
n
A
r
r
i
v
a
l
D
a
t
e
 
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
b
a
c
k
W
a
s
C
l
i
c
k
e
d
)
 
{

 
 
 
 
 
 
 
 
$
o
v
e
r
r
i
d
e
S
e
s
s
i
o
n
A
r
r
i
v
a
l
D
a
t
e
 
=
 
f
a
l
s
e
;

 
 
 
 
}


 
 
 
 
i
f
 
(
$
b
k
g
-
>
a
r
r
i
v
a
l
D
a
t
e
 
!
=
 
'
'
 
&
&
 
!
$
o
v
e
r
r
i
d
e
S
e
s
s
i
o
n
A
r
r
i
v
a
l
D
a
t
e
)
 
{

 
 
 
 
 
 
 
 
$
a
r
r
i
v
a
l
D
a
t
e
 
=
 
$
b
k
g
-
>
a
r
r
i
v
a
l
D
a
t
e
;

 
 
 
 
 
 
 
 
$
d
e
p
a
r
t
u
r
e
D
a
t
e
 
=
 
$
b
k
g
-
>
d
e
p
a
r
t
u
r
e
D
a
t
e
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
m
r
C
o
n
f
i
g
[
 
'
a
u
t
o
_
d
e
t
e
c
t
_
c
o
u
n
t
r
y
_
f
o
r
_
b
o
o
k
i
n
g
_
f
o
r
m
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
m
r
C
o
n
f
i
g
[
 
'
a
u
t
o
_
d
e
t
e
c
t
_
c
o
u
n
t
r
y
_
f
o
r
_
b
o
o
k
i
n
g
_
f
o
r
m
'
 
]
 
=
 
'
1
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
$
g
u
e
s
t
[
'
R
E
G
I
O
N
'
]
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
a
u
t
o
_
d
e
t
e
c
t
_
c
o
u
n
t
r
y
_
f
o
r
_
b
o
o
k
i
n
g
_
f
o
r
m
'
 
]
 
=
=
 
'
1
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
u
s
e
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
[
 
'
g
e
o
l
o
c
a
t
e
d
_
c
o
u
n
t
r
y
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
G
u
e
s
t
_
c
o
u
n
t
r
y
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
u
s
e
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
[
 
'
g
e
o
l
o
c
a
t
e
d
_
c
o
u
n
t
r
y
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
b
k
g
-
>
s
e
t
G
u
e
s
t
_
c
o
u
n
t
r
y
(
$
m
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
f
a
u
l
t
c
o
u
n
t
r
y
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
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
R
E
G
I
O
N
_
D
R
O
P
D
O
W
N
'
 
]
 
=
 
s
e
t
u
p
R
e
g
i
o
n
s
(
$
b
k
g
-
>
c
o
u
n
t
r
y
,
 
$
b
k
g
-
>
r
e
g
i
o
n
)
;


 
 
 
 
 
 
 
 
/
/
d
a
t
e
s

 
 
 
 
 
 
 
 
$
a
r
r
i
v
a
l
D
a
t
e
 
=
 
$
b
k
g
-
>
i
n
i
t
A
r
r
i
v
a
l
D
a
t
e
(
)
;


 
 
 
 
 
 
 
 
$
d
a
t
e
D
i
f
f
 
=
 
a
b
s
(
d
a
t
e
D
i
f
f
(
'
d
'
,
 
$
t
o
d
a
y
,
 
$
t
h
i
s
d
a
t
e
)
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
d
a
t
e
 
&
&
 
$
d
a
t
e
D
i
f
f
 
>
=
 
$
b
k
g
-
>
c
f
g
_
m
i
n
d
a
y
s
b
e
f
o
r
e
a
r
r
i
v
a
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
b
k
g
-
>
c
h
e
c
k
A
r
r
i
v
a
l
D
a
t
e
(
$
t
h
i
s
d
a
t
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
r
r
i
v
a
l
D
a
t
e
 
=
 
$
b
k
g
-
>
n
e
x
t
D
a
t
e
P
r
o
p
e
r
t
y
H
a
s
R
o
o
m
F
r
e
e
(
$
t
h
i
s
d
a
t
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
A
r
r
i
v
a
l
D
a
t
e
(
$
a
r
r
i
v
a
l
D
a
t
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
a
r
r
i
v
a
l
D
a
t
e
 
=
 
$
b
k
g
-
>
n
e
x
t
D
a
t
e
P
r
o
p
e
r
t
y
H
a
s
R
o
o
m
F
r
e
e
(
$
t
h
i
s
d
a
t
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
A
r
r
i
v
a
l
D
a
t
e
(
$
a
r
r
i
v
a
l
D
a
t
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
b
k
g
-
>
c
h
e
c
k
A
r
r
i
v
a
l
D
a
t
e
(
$
a
r
r
i
v
a
l
D
a
t
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
r
r
i
v
a
l
D
a
t
e
 
=
 
$
b
k
g
-
>
n
e
x
t
D
a
t
e
P
r
o
p
e
r
t
y
H
a
s
R
o
o
m
F
r
e
e
(
$
a
r
r
i
v
a
l
D
a
t
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
A
r
r
i
v
a
l
D
a
t
e
(
$
a
r
r
i
v
a
l
D
a
t
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
b
k
g
-
>
s
e
t
A
r
r
i
v
a
l
D
a
t
e
(
$
a
r
r
i
v
a
l
D
a
t
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
d
e
f
a
u
l
t
d
e
p
a
r
t
u
r
e
D
a
t
e
 
=
 
$
b
k
g
-
>
i
n
i
t
D
e
p
a
r
t
u
r
e
D
a
t
e
(
)
;

 
 
 
 
 
 
 
 
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
a
r
r
i
v
a
l
D
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
s
e
a
r
c
h
_
d
a
t
a
[
 
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
'
 
]
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
e
p
a
r
t
u
r
e
D
a
t
e
 
=
 
$
d
e
f
a
u
l
t
d
e
p
a
r
t
u
r
e
D
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
e
p
a
r
t
u
r
e
D
a
t
e
 
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
s
e
a
r
c
h
_
d
a
t
a
[
 
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
_
d
e
p
a
r
t
u
r
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
d
e
p
a
r
t
u
r
e
D
a
t
e
 
=
 
J
S
C
a
l
C
o
n
v
e
r
t
I
n
p
u
t
D
a
t
e
s
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
d
e
p
a
r
t
u
r
e
D
a
t
e
'
,
 
'
'
)
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
v
a
l
u
e
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
I
n
p
u
t
(
'
d
a
t
e
'
,
 
$
d
e
p
a
r
t
u
r
e
D
a
t
e
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
v
a
l
u
e
)
 
&
&
 
$
b
k
g
-
>
c
h
e
c
k
D
e
p
a
r
t
u
r
e
D
a
t
e
(
$
v
a
l
u
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
D
e
p
a
r
t
u
r
e
D
a
t
e
(
$
v
a
l
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
d
e
p
a
r
t
u
r
e
D
a
t
e
 
=
 
$
v
a
l
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
d
e
p
a
r
t
u
r
e
D
a
t
e
 
=
 
$
d
e
f
a
u
l
t
d
e
p
a
r
t
u
r
e
D
a
t
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
D
e
p
a
r
t
u
r
e
D
a
t
e
(
$
d
e
p
a
r
t
u
r
e
D
a
t
e
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
S
t
a
y
D
a
y
s
(
)
;

 
 
 
 
 
 
 
 
$
b
k
g
-
>
s
e
t
D
a
t
e
R
a
n
g
e
S
t
r
i
n
g
(
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
E
A
R
L
I
E
S
T
P
O
S
S
I
B
L
E
A
R
R
I
V
A
L
D
A
T
E
'
 
]
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
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
A
J
A
X
F
O
R
M
_
E
A
R
L
I
E
S
T
P
O
S
S
I
B
L
E
A
R
R
I
V
A
L
D
A
T
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
A
J
A
X
F
O
R
M
_
E
A
R
L
I
E
S
T
P
O
S
S
I
B
L
E
A
R
R
I
V
A
L
D
A
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
.
$
b
k
g
-
>
J
S
C
a
l
m
a
k
e
I
n
p
u
t
D
a
t
e
s
(
$
a
r
r
i
v
a
l
D
a
t
e
)
;


 
 
 
 
$
e
x
p
l
o
d
e
d
E
a
r
l
i
e
s
t
 
=
 
e
x
p
l
o
d
e
(
'
/
'
,
 
$
t
o
d
a
y
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
A
R
L
I
E
S
T
D
A
Y
'
 
]
 
=
 
$
e
x
p
l
o
d
e
d
E
a
r
l
i
e
s
t
[
 
2
 
]
 
+
 
$
b
k
g
-
>
c
f
g
_
m
i
n
d
a
y
s
b
e
f
o
r
e
a
r
r
i
v
a
l
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
A
R
L
I
E
S
T
M
O
N
'
 
]
 
=
 
$
e
x
p
l
o
d
e
d
E
a
r
l
i
e
s
t
[
 
1
 
]
 
-
 
1
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
A
R
L
I
E
S
T
Y
E
A
R
'
 
]
 
=
 
$
e
x
p
l
o
d
e
d
E
a
r
l
i
e
s
t
[
 
0
 
]
;

 
 
 
 
/
/
i
f
 
(
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
 
&
&
 
$
a
r
r
i
v
a
l
D
a
t
e
 
<
 
$
t
o
d
a
y
)

 
 
 
 
/
/
	
$
o
u
t
p
u
t
[
'
A
R
R
I
V
A
L
D
A
T
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
D
a
t
e
(
$
a
r
r
i
v
a
l
D
a
t
e
)
;

 
 
 
 
/
/
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
A
R
R
I
V
A
L
D
A
T
E
'
 
]
 
=
 
$
b
k
g
-
>
m
a
k
e
A
r
r
i
v
a
l
D
a
t
e
O
u
t
p
u
t
(
$
a
r
r
i
v
a
l
D
a
t
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
D
E
P
A
R
T
U
R
E
D
A
T
E
'
 
]
 
=
 
$
b
k
g
-
>
m
a
k
e
D
e
p
a
r
t
u
r
e
D
a
t
e
O
u
t
p
u
t
(
$
d
e
p
a
r
t
u
r
e
D
a
t
e
)
;


 
 
 
 
$
c
o
u
n
t
e
r
 
=
 
0
;

 
 
 
 
i
f
 
(
!
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
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
g
u
e
s
t
T
y
p
e
s
 
a
s
 
$
g
s
t
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
 
=
 
$
b
k
g
-
>
g
e
t
G
u
e
s
t
V
a
r
i
a
n
t
D
e
t
a
i
l
s
(
$
g
s
t
[
 
'
I
D
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
u
r
r
e
n
t
 
=
=
 
f
a
l
s
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
o
u
n
t
e
r
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
i
n
i
t
G
u
e
s
t
V
a
r
i
a
n
t
(
$
g
s
t
[
 
'
I
D
'
 
]
,
 
$
m
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
f
a
u
l
t
N
u
m
b
e
r
O
f
F
i
r
s
t
G
u
e
s
t
t
y
p
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
b
k
g
-
>
i
n
i
t
G
u
e
s
t
V
a
r
i
a
n
t
(
$
g
s
t
[
 
'
I
D
'
 
]
,
 
0
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
+
+
$
c
o
u
n
t
e
r
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}

 
 
 
 
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
g
u
e
s
t
T
y
p
e
s
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
B
I
L
L
I
N
G
_
T
O
T
A
L
I
N
P
A
R
T
Y
'
 
]
 
=
 
'
'
;

 
 
 
 
}


 
 
 
 
$
e
x
 
=
 
$
b
k
g
-
>
m
a
k
e
E
x
t
r
a
s
(
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
)
;

 
 
 
 
$
e
x
t
r
a
_
d
e
t
a
i
l
s
 
=
 
$
e
x
[
 
'
c
o
r
e
_
e
x
t
r
a
s
'
 
]
;

 
 
 
 
$
e
x
x
 
=
 
$
b
k
g
-
>
m
a
k
e
T
h
i
r
d
P
a
r
t
y
E
x
t
r
a
s
(
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
)
;

 
 
 
 
$
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
 
=
 
$
e
x
x
[
 
'
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
'
 
]
;


 
 
 
 
$
e
x
t
r
a
s
H
e
a
d
e
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
e
x
t
r
a
s
H
 
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
!
e
m
p
t
y
(
$
e
x
t
r
a
_
d
e
t
a
i
l
s
)
 
|
|
 
!
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
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
)
)
 
&
&
 
$
m
r
C
o
n
f
i
g
[
 
'
s
h
o
w
E
x
t
r
a
s
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
o
u
t
p
u
t
[
 
'
E
X
T
R
A
S
_
I
N
F
O
'
 
]
 
=
 
'
<
i
m
g
 
b
o
r
d
e
r
=
"
0
"
 
s
t
y
l
e
=
"
v
e
r
t
i
c
a
l
-
a
l
i
g
n
:
t
o
p
;
"
 
s
r
c
=
"
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
S
_
R
E
L
P
A
T
H
.
'
i
n
f
o
.
p
n
g
"
 
/
>
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
A
J
A
X
F
O
R
M
_
E
X
T
R
A
S
'
 
]
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
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
A
J
A
X
F
O
R
M
_
E
X
T
R
A
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
A
J
A
X
F
O
R
M
_
E
X
T
R
A
S
'
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
A
J
A
X
F
O
R
M
_
E
X
T
R
A
S
_
D
E
S
C
'
 
]
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
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
A
J
A
X
F
O
R
M
_
E
X
T
R
A
S
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
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
E
X
T
R
A
S
_
D
E
S
C
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
E
X
T
R
A
S
_
T
O
T
A
L
'
 
]
 
=
 
$
b
k
g
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
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
A
J
A
X
F
O
R
M
_
E
X
T
R
A
S
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
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
E
X
T
R
A
S
_
T
O
T
A
L
'
)
)
;


 
 
 
 
 
 
 
 
$
e
x
t
r
a
s
H
[
 
'
E
X
T
R
A
S
_
T
O
T
A
L
'
 
]
 
=
 
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
X
T
R
A
S
_
T
O
T
A
L
'
 
]
;

 
 
 
 
 
 
 
 
$
e
x
t
r
a
s
H
 
[
 
'
E
X
T
R
A
S
_
H
E
A
D
E
R
'
 
]
 
=
 
$
o
u
t
p
u
t
[
 
'
A
J
A
X
F
O
R
M
_
E
X
T
R
A
S
_
D
E
S
C
'
 
]
;

 
 
 
 
 
 
 
 
$
e
x
t
r
a
s
H
e
a
d
e
r
[
 
]
 
=
 
$
e
x
t
r
a
s
H
;


 
 
 
 
 
 
 
 
$
b
k
g
-
>
c
f
g
_
s
h
o
w
E
x
t
r
a
s
 
=
 
t
r
u
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
S
H
O
W
E
X
T
R
A
S
'
 
]
 
=
 
'
t
r
u
e
'
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
S
H
O
W
E
X
T
R
A
S
'
 
]
 
=
 
'
f
a
l
s
e
'
;

 
 
 
 
 
 
 
 
$
b
k
g
-
>
c
f
g
_
s
h
o
w
E
x
t
r
a
s
 
=
 
f
a
l
s
e
;

 
 
 
 
}


 
 
 
 
$
b
k
g
-
>
s
e
t
S
t
a
y
D
a
y
s
(
)
;

 
 
 
 
$
b
k
g
-
>
s
e
t
D
a
t
e
R
a
n
g
e
S
t
r
i
n
g
(
)
;

 
 
 
 
$
d
a
t
e
R
a
n
g
e
I
n
c
l
u
d
e
s
W
e
e
k
e
n
d
 
=
 
$
b
k
g
-
>
d
a
t
e
R
a
n
g
e
I
n
c
l
u
d
e
s
W
e
e
k
e
n
d
s
(
)
;

 
 
 
 
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
 
=
 
$
b
k
g
-
>
g
e
t
A
l
l
R
o
o
m
U
i
d
s
F
o
r
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
f
r
e
e
R
o
o
m
s
A
r
r
a
y
 
=
 
$
b
k
g
-
>
r
e
m
o
v
e
R
o
o
m
u
i
d
s
A
l
r
e
a
d
y
I
n
T
h
i
s
B
o
o
k
i
n
g
(
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
)
;

 
 
 
 
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
 
=
 
$
b
k
g
-
>
f
i
n
d
F
r
e
e
R
o
o
m
s
I
n
D
a
t
e
R
a
n
g
e
(
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
)
;

 
 
 
 
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
 
=
 
$
b
k
g
-
>
c
h
e
c
k
P
e
o
p
l
e
N
u
m
b
e
r
s
(
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
)
;

 
 
 
 
$
r
o
o
m
A
n
d
T
a
r
i
f
f
A
r
r
a
y
 
=
 
$
b
k
g
-
>
g
e
t
T
a
r
i
f
f
s
F
o
r
R
o
o
m
U
i
d
s
(
$
f
r
e
e
R
o
o
m
s
A
r
r
a
y
)
;


 
 
 
 
$
r
m
 
=
 
'
'
;

 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
'
 
]
 
=
=
 
'
0
'
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
m
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
o
o
k
i
n
g
_
f
o
r
m
_
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
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
r
m
 
=
 
'
<
d
i
v
>
<
s
t
r
o
n
g
>
'
.
$
b
k
g
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
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
A
J
A
X
F
O
R
M
_
S
E
L
E
C
T
E
D
R
O
O
M
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
A
J
A
X
F
O
R
M
_
S
E
L
E
C
T
E
D
R
O
O
M
S
'
)
)
.
'
<
/
s
t
r
o
n
g
>
<
/
d
i
v
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
b
k
g
-
>
n
u
m
b
e
r
O
f
C
u
r
r
e
n
t
l
y
S
e
l
e
c
t
e
d
R
o
o
m
s
(
)
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
m
 
.
=
 
$
b
k
g
-
>
l
i
s
t
C
u
r
r
e
n
t
l
y
S
e
l
e
c
t
e
d
R
o
o
m
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
m
 
.
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
u
i
-
s
t
a
t
e
-
e
r
r
o
r
"
>
'
.
$
b
k
g
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
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
F
O
R
M
_
N
O
R
O
O
M
S
S
E
L
E
C
T
E
D
Y
E
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
B
O
O
K
I
N
G
F
O
R
M
_
N
O
R
O
O
M
S
S
E
L
E
C
T
E
D
Y
E
T
'
)
)
.
'
<
/
d
i
v
>
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
S
E
L
E
C
T
E
D
R
O
O
M
'
 
]
 
=
 
$
r
m
;


 
 
 
 
 
 
 
 
 
 
 
 
$
r
m
 
=
 
'
<
d
i
v
>
<
s
t
r
o
n
g
>
'
.
$
b
k
g
-
>
s
a
n
i
t
i
s
e
O
u
t
p
u
t
(
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
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
L
E
R
O
O
M
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
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
L
E
R
O
O
M
S
'
)
)
.
'
<
/
s
t
r
o
n
g
>
<
/
d
i
v
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
/
/
$
r
m
.
=
"
<
b
r
>
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
m
 
.
=
 
$
b
k
g
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
R
o
o
m
s
L
i
s
t
(
$
r
o
o
m
A
n
d
T
a
r
i
f
f
A
r
r
a
y
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
m
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
o
o
k
i
n
g
_
f
o
r
m
_
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
'
 
]
 
=
=
 
'
2
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
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
R
o
o
m
s
L
i
s
t
(
$
r
o
o
m
A
n
d
T
a
r
i
f
f
A
r
r
a
y
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
r
m
 
=
 
$
b
k
g
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
R
o
o
m
s
L
i
s
t
(
$
r
o
o
m
A
n
d
T
a
r
i
f
f
A
r
r
a
y
)
;

 
 
 
 
}


 
 
 
 
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
o
u
t
p
u
t
[
 
'
S
E
L
E
C
T
E
D
R
O
O
M
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
S
E
L
E
C
T
E
D
R
O
O
M
'
 
]
 
=
 
'
'
;

 
 
 
 
}


 
 
 
 
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
i
n
c
l
u
d
e
_
r
o
o
m
_
b
o
o
k
i
n
g
_
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
'
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
A
V
A
I
L
A
B
L
E
R
O
O
M
S
'
 
]
 
=
 
$
r
m
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
R
O
O
M
S
L
I
S
T
'
 
]
 
=
 
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
E
L
E
C
T
E
D
R
O
O
M
'
 
]
.
'
<
b
r
>
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
A
V
A
I
L
A
B
L
E
R
O
O
M
S
'
 
]
.
'
<
/
d
i
v
>
<
d
i
v
 
i
d
=
"
a
v
a
i
l
R
o
o
m
s
"
>
'
;

 
 
 
 
}

 
 
 
 
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
o
u
t
p
u
t
'
 
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
0
1
0
3
'
,
 
$
o
u
t
p
u
t
)
;
 
/
/
 
E
n
d
-
f
o
r
m
 
g
e
n
e
r
a
t
i
o
n


 
 
 
 
$
b
k
g
-
>
s
t
o
r
e
B
o
o
k
i
n
g
D
e
t
a
i
l
s
(
)
;

 
 
 
 
$
t
o
l
o
a
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

 
 
 
 
$
l
o
a
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

 
 
 
 
/
/
$
b
k
g
-
>
w
r
i
t
e
T
o
L
o
g
f
i
l
e
(
"
S
T
O
R
E
D
 
B
O
O
K
I
N
G
"
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
i
n
c
l
u
d
e
_
r
o
o
m
_
b
o
o
k
i
n
g
_
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
'
)
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
'
 
]
 
=
=
 
'
1
'
 
&
&
 
(
i
s
s
e
t
(
$
t
h
i
s
d
a
t
e
)
 
&
&
 
!
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
d
a
t
e
)
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
A
s
 
o
f
 
4
.
4
 
w
e
'
v
e
 
d
o
n
e
 
a
w
a
y
 
w
i
t
h
 
t
h
e
 
t
w
o
 
a
j
a
x
 
c
a
l
l
 
p
r
o
c
e
s
s
 
t
o
 
r
u
n
 
t
h
e
 
b
o
o
k
i
n
g
 
f
o
r
m
,
 
h
o
w
e
v
e
r
 
w
e
 
s
t
i
l
l
 
n
e
e
d
 
t
o
 
i
n
i
t
i
a
l
i
s
e
 
t
h
e
 
a
r
r
i
v
a
l
 
d
a
t
e
 
t
h
r
o
u
g
h
 
a
j
a
x
 
f
o
r
 
S
R
P
s

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
s
r
p
t
r
i
g
g
e
r
 
=
 
"
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
g
e
t
(
a
j
a
x
u
r
l
+
'
&
t
a
s
k
=
h
a
n
d
l
e
r
e
q
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
_
c
h
e
c
k
=
"
.
(
i
n
t
)
 
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
.
"
'
,
{
 
f
i
e
l
d
 
:
 
'
a
r
r
i
v
a
l
D
a
t
e
'
,
 
v
a
l
u
e
:
 
'
"
.
$
b
k
g
-
>
J
S
C
a
l
m
a
k
e
I
n
p
u
t
D
a
t
e
s
(
$
b
k
g
-
>
a
r
r
i
v
a
l
D
a
t
e
)
.
"
'
,
 
f
i
e
l
d
 
:
 
'
d
e
p
a
r
t
u
r
e
D
a
t
e
'
,
 
v
a
l
u
e
:
 
'
"
.
$
b
k
g
-
>
J
S
C
a
l
m
a
k
e
I
n
p
u
t
D
a
t
e
s
(
$
b
k
g
-
>
d
e
p
a
r
t
u
r
e
D
a
t
e
)
.
"
'
 
}
,
f
u
n
c
t
i
o
n
(
d
a
t
a
)
{
s
h
o
w
R
o
o
m
s
L
i
s
t
(
d
a
t
a
)
;
 
s
h
o
w
_
l
o
g
(
'
'
)
;
}
)
;
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
l
o
a
d
[
 
'
O
N
L
O
A
D
'
 
]
 
=
 
$
t
m
p
s
r
p
t
r
i
g
g
e
r
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
o
l
o
a
d
[
 
]
 
=
 
$
l
o
a
d
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
l
o
a
d
[
 
'
O
N
L
O
A
D
'
 
]
 
=
 
"
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
g
e
t
(
a
j
a
x
u
r
l
+
'
&
t
a
s
k
=
h
a
n
d
l
e
r
e
q
&
f
i
r
s
t
r
u
n
=
1
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
_
c
h
e
c
k
=
"
.
(
i
n
t
)
 
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
.
"
'
,
{
 
f
i
e
l
d
 
:
 
'
a
r
r
i
v
a
l
D
a
t
e
'
,
 
v
a
l
u
e
:
 
'
"
.
$
b
k
g
-
>
J
S
C
a
l
m
a
k
e
I
n
p
u
t
D
a
t
e
s
(
$
b
k
g
-
>
a
r
r
i
v
a
l
D
a
t
e
)
.
"
'
,
 
f
i
e
l
d
 
:
 
'
d
e
p
a
r
t
u
r
e
D
a
t
e
'
,
 
v
a
l
u
e
:
 
'
"
.
$
b
k
g
-
>
J
S
C
a
l
m
a
k
e
I
n
p
u
t
D
a
t
e
s
(
$
b
k
g
-
>
d
e
p
a
r
t
u
r
e
D
a
t
e
)
.
"
'
 
}
,
f
u
n
c
t
i
o
n
(
d
a
t
a
)
{
s
h
o
w
R
o
o
m
s
L
i
s
t
(
d
a
t
a
)
;
 
s
h
o
w
_
l
o
g
(
'
'
)
;
}
)
;
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
o
l
o
a
d
[
 
]
 
=
 
$
l
o
a
d
;

 
 
 
 
 
 
 
 
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
 
]
 
=
 
j
o
m
r
e
s
V
a
l
i
d
a
t
e
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
i
n
c
l
u
d
e
_
r
o
o
m
_
b
o
o
k
i
n
g
_
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
'
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
M
S
L
I
S
T
E
N
A
B
L
E
D
'
 
]
 
=
 
'
t
r
u
e
'
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
M
S
L
I
S
T
E
N
A
B
L
E
D
'
 
]
 
=
 
'
f
a
l
s
e
'
;

 
 
 
 
}


 
 
 
 
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
c
u
s
t
o
m
_
f
i
e
l
d
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

 
 
 
 
$
c
u
s
t
o
m
_
f
i
e
l
d
s
 
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
c
u
s
t
o
m
_
f
i
e
l
d
_
h
a
n
d
l
e
r
(
)
;


 
 
 
 
$
p
t
y
p
e
_
i
d
 
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
t
y
p
e
_
i
d
;


 
 
 
 
$
a
l
l
C
u
s
t
o
m
F
i
e
l
d
s
 
=
 
$
c
u
s
t
o
m
_
f
i
e
l
d
s
-
>
g
e
t
A
l
l
C
u
s
t
o
m
F
i
e
l
d
s
B
y
P
t
y
p
e
I
d
(
$
p
t
y
p
e
_
i
d
)
;

 
 
 
 
$
c
u
s
t
o
m
F
i
e
l
d
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
a
l
l
C
u
s
t
o
m
F
i
e
l
d
s
)
)
 
{

 
 
 
 
 
 
 
 
$
i
c
o
n
 
=
 
'
*
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
a
l
l
C
u
s
t
o
m
F
i
e
l
d
s
 
a
s
 
$
f
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
e
m
p
H
a
n
d
l
e
r
F
i
e
l
d
N
a
m
e
 
=
 
$
f
[
 
'
f
i
e
l
d
n
a
m
e
'
 
]
.
'
_
'
.
$
f
[
 
'
u
i
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
e
l
d
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
e
l
d
d
a
t
a
[
 
'
F
I
E
L
D
N
A
M
E
'
 
]
 
=
 
$
f
[
 
'
f
i
e
l
d
n
a
m
e
'
 
]
.
'
_
'
.
$
f
[
 
'
u
i
d
'
 
]
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
b
o
o
k
i
n
g
[
 
$
t
e
m
p
H
a
n
d
l
e
r
F
i
e
l
d
N
a
m
e
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
e
l
d
d
a
t
a
[
 
'
D
E
F
A
U
L
T
_
V
A
L
U
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
b
o
o
k
i
n
g
[
 
$
t
e
m
p
H
a
n
d
l
e
r
F
i
e
l
d
N
a
m
e
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
e
l
d
d
a
t
a
[
 
'
D
E
F
A
U
L
T
_
V
A
L
U
E
'
 
]
 
=
 
$
f
[
 
'
d
e
f
a
u
l
t
_
v
a
l
u
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
e
l
d
d
a
t
a
[
 
'
U
I
D
'
 
]
 
=
 
$
f
[
 
'
u
i
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
e
l
d
d
a
t
a
[
 
'
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
J
O
M
R
E
S
_
C
U
S
T
O
M
T
E
X
T
'
.
$
f
[
 
'
u
i
d
'
 
]
,
 
$
f
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
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
e
l
d
d
a
t
a
[
 
'
R
E
Q
U
I
R
E
D
'
 
]
 
=
 
'
&
n
b
s
p
;
'
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
f
[
 
'
r
e
q
u
i
r
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
f
i
e
l
d
d
a
t
a
[
 
'
W
A
R
N
I
N
G
'
 
]
 
=
 
'
 
w
a
r
n
i
n
g
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
e
l
d
d
a
t
a
[
 
'
R
E
Q
U
I
R
E
D
'
 
]
 
=
 
'
<
f
o
n
t
 
s
t
y
l
e
=
"
c
o
l
o
r
:
#
f
f
0
0
0
0
;
"
>
*
<
/
f
o
n
t
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
e
l
d
d
a
t
a
[
 
'
S
I
Z
E
'
 
]
 
=
 
1
2
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
l
e
n
(
$
f
[
 
'
d
e
f
a
u
l
t
_
v
a
l
u
e
'
 
]
)
 
>
 
1
2
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
e
l
d
d
a
t
a
[
 
'
S
I
Z
E
'
 
]
 
=
 
s
t
r
l
e
n
(
$
f
[
 
'
d
e
f
a
u
l
t
_
v
a
l
u
e
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
c
u
s
t
o
m
F
i
e
l
d
s
[
 
]
 
=
 
$
f
i
e
l
d
d
a
t
a
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
U
S
T
O
M
F
I
E
L
D
_
J
A
V
A
S
C
R
I
P
T
'
 
]
 
=
 
g
e
n
e
r
a
t
e
C
u
s
t
o
m
F
i
e
l
d
s
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
(
$
c
u
s
t
o
m
F
i
e
l
d
s
)
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
C
U
S
T
O
M
F
I
E
L
D
_
J
A
V
A
S
C
R
I
P
T
'
 
]
 
=
 
'
'
;

 
 
 
 
}


 
 
 
 
$
b
o
o
k
e
d
_
d
a
t
e
s
 
=
 
$
b
k
g
-
>
g
e
t
_
f
u
l
l
y
b
o
o
k
e
d
_
d
a
t
e
s
(
)
;

 
 
 
 
$
b
o
o
k
e
d
_
d
a
t
e
s
_
o
u
t
p
u
t
 
=
 
'
v
a
r
 
b
o
o
k
e
d
D
a
y
s
 
=
 
[
]
'
;

 
 
 
 
$
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
b
o
o
k
e
d
_
d
a
t
e
s
 
=
 
c
o
u
n
t
(
$
b
o
o
k
e
d
_
d
a
t
e
s
)
;

 
 
 
 
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
_
o
f
_
b
o
o
k
e
d
_
d
a
t
e
s
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
$
b
o
o
k
e
d
_
d
a
t
e
s
_
o
u
t
p
u
t
 
=
 
'
v
a
r
 
b
o
o
k
e
d
D
a
y
s
 
=
 
[
'
;

 
 
 
 
 
 
 
 
$
c
o
u
n
t
e
r
 
=
 
1
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
b
o
o
k
e
d
_
d
a
t
e
s
 
a
s
 
$
d
a
t
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
e
d
_
d
a
t
e
s
_
o
u
t
p
u
t
 
.
=
 
'
"
'
.
$
d
a
t
e
.
'
"
'
;

 
 
 
 
 
 
 
 
 
 
 
 
+
+
$
c
o
u
n
t
e
r
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
o
u
n
t
e
r
 
<
=
 
$
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
b
o
o
k
e
d
_
d
a
t
e
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
b
o
o
k
e
d
_
d
a
t
e
s
_
o
u
t
p
u
t
 
.
=
 
'
,
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
b
o
o
k
e
d
_
d
a
t
e
s
_
o
u
t
p
u
t
 
.
=
 
'
]
;
'
;

 
 
 
 
 
 
 
 
/
/
v
a
r
 
b
o
o
k
e
d
D
a
y
s
 
=
 
[
"
2
0
1
0
-
6
-
1
0
"
,
"
2
0
1
0
-
6
-
1
2
"
,
"
2
0
1
0
-
6
-
1
4
"
]
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
N
A
M
E
'
 
]
 
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
B
O
O
K
E
D
D
A
T
E
S
'
 
]
 
=
 
$
b
o
o
k
e
d
_
d
a
t
e
s
_
o
u
t
p
u
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
M
O
D
A
L
'
 
]
 
=
 
'
'
;
 
/
/
 
N
e
e
d
s
 
t
o
 
b
e
 
h
e
r
e
.
 
I
f
 
n
o
t
,
 
a
 
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
 
e
r
r
o
r
 
w
i
l
l
 
o
c
c
u
r
 
w
h
e
n
 
t
h
e
 
b
o
o
k
i
n
g
 
f
o
r
m
 
i
s
 
s
h
o
w
n
 
i
n
 
t
h
e
 
p
r
o
p
e
r
t
y
 
d
e
t
a
i
l
s
 
p
a
g
e
.


 
 
 
 
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
d
o
b
o
o
k
i
n
g
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
b
o
o
k
i
n
g
_
f
o
r
m
_
m
o
d
a
l
_
p
o
p
u
p
'
 
]
 
=
=
 
'
1
'
 
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
u
s
i
n
g
_
b
o
o
t
s
t
r
a
p
(
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
M
O
D
A
L
'
 
]
 
=
 
'
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
 
"
#
b
o
o
k
i
n
g
_
f
o
r
m
"
 
)
.
d
i
a
l
o
g
(
{
w
i
d
t
h
:
1
0
0
0
,
m
o
d
a
l
:
t
r
u
e
}
)
;
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
H
I
D
D
E
N
S
T
Y
L
E
'
 
]
 
=
 
'
s
t
y
l
e
=
"
d
i
s
p
l
a
y
:
n
o
n
e
;
"
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
O
P
E
N
B
O
O
K
I
N
G
O
F
R
M
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
 
'
<
a
 
h
r
e
f
=
"
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
:
o
p
e
n
_
b
o
o
k
i
n
g
_
f
o
r
m
(
)
;
"
 
c
l
a
s
s
=
"
f
g
-
b
u
t
t
o
n
 
u
i
-
s
t
a
t
e
-
d
e
f
a
u
l
t
 
u
i
-
c
o
r
n
e
r
-
a
l
l
"
>
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
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
U
T
T
O
N
_
O
P
E
N
_
B
O
O
K
I
N
G
F
O
R
M
'
 
]
.
'
<
/
a
>
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
U
T
T
O
N
_
B
A
C
K
_
T
O
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
D
E
T
A
I
L
S
'
 
]
 
=
 
'
<
a
 
h
r
e
f
=
"
'
.
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
)
.
'
"
 
c
l
a
s
s
=
"
f
g
-
b
u
t
t
o
n
 
u
i
-
s
t
a
t
e
-
d
e
f
a
u
l
t
 
u
i
-
c
o
r
n
e
r
-
a
l
l
"
>
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
_
J
O
M
R
E
S
_
A
J
A
X
F
O
R
M
_
B
U
T
T
O
N
_
B
A
C
K
_
T
O
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
D
E
T
A
I
L
S
'
 
]
.
'
<
/
a
>
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
P
A
N
E
L
P
O
S
I
T
I
O
N
'
 
]
 
=
 
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
b
o
o
k
i
n
g
_
f
o
r
m
_
t
o
t
a
l
s
p
a
n
e
l
_
p
o
s
i
t
i
o
n
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
B
O
O
K
I
N
G
F
O
R
M
W
I
D
T
H
'
 
]
 
=
 
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
b
o
o
k
i
n
g
_
f
o
r
m
_
w
i
d
t
h
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
M
A
I
L
_
A
L
R
E
A
D
Y
_
I
N
U
S
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
E
M
A
I
L
_
A
L
R
E
A
D
Y
_
I
N
_
U
S
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
B
O
O
K
I
N
G
F
O
R
M
_
M
O
N
I
T
O
R
I
N
G
_
E
M
A
I
L
_
A
L
R
E
A
D
Y
_
I
N
_
U
S
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
E
M
A
I
L
_
I
N
P
U
T
_
D
I
S
A
B
L
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
R
e
g
i
s
t
e
r
e
d
 
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
 
|
|
 
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
s
_
p
a
r
t
n
e
r
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
E
M
A
I
L
_
I
N
P
U
T
_
D
I
S
A
B
L
E
D
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
E
P
O
S
I
T
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
i
s
s
e
t
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
D
E
P
O
S
I
T
'
 
]
)
)
 
{
 
/
/
 
N
e
e
d
 
t
h
i
s
 
t
o
 
s
t
o
p
 
t
h
e
 
b
o
o
k
i
n
g
 
f
o
r
m
 
t
o
t
a
l
s
 
p
a
n
e
l
 
f
r
o
m
 
s
h
o
w
i
n
g
 
a
 
t
h
i
c
k
 
l
i
n
e
 
i
f
 
t
h
e
 
d
e
p
o
s
i
t
 
o
p
t
i
o
n
 
i
s
 
d
i
s
a
b
l
e
d

 
 
 
 
 
 
 
 
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
E
P
O
S
I
T
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
c
l
a
s
s
=
"
u
i
-
w
i
d
g
e
t
-
c
o
n
t
e
n
t
 
u
i
-
c
o
r
n
e
r
-
a
l
l
"
'
;

 
 
 
 
}

 
 
 
 
/
/
 
v
4
.
5
.
5

 
 
 
 
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
m
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
o
o
k
i
n
g
_
f
o
r
m
_
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
$
m
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
o
o
k
i
n
g
_
f
o
r
m
_
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
'
 
]
 
=
 
'
1
'
;

 
 
 
 
}


 
 
 
 
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
i
n
c
l
u
d
e
_
r
o
o
m
_
b
o
o
k
i
n
g
_
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
'
)
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
m
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
o
o
k
i
n
g
_
f
o
r
m
_
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
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
c
l
a
s
s
i
c
_
r
o
o
m
s
_
l
i
s
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
c
l
a
s
s
i
c
_
r
o
o
m
s
_
l
i
s
t
_
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
c
l
a
s
s
i
c
_
r
o
o
m
s
_
l
i
s
t
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
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
s
s
i
c
_
r
o
o
m
s
_
l
i
s
t
[
 
'
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
L
E
_
D
E
S
C
'
 
]
 
=
 
$
o
u
t
p
u
t
[
 
'
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
L
E
_
D
E
S
C
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
s
s
i
c
_
r
o
o
m
s
_
l
i
s
t
[
 
'
L
O
O
K
R
I
G
H
T
'
 
]
 
=
 
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
O
K
R
I
G
H
T
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
s
s
i
c
_
r
o
o
m
s
_
l
i
s
t
[
 
'
S
E
L
E
C
T
E
D
R
O
O
M
'
 
]
 
=
 
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
E
L
E
C
T
E
D
R
O
O
M
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
s
s
i
c
_
r
o
o
m
s
_
l
i
s
t
[
 
'
A
V
A
I
L
A
B
L
E
R
O
O
M
S
'
 
]
 
=
 
$
o
u
t
p
u
t
[
 
'
A
V
A
I
L
A
B
L
E
R
O
O
M
S
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
s
s
i
c
_
r
o
o
m
s
_
l
i
s
t
[
 
'
E
S
T
I
M
A
T
E
W
A
R
N
I
N
G
'
 
]
 
=
 
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
S
T
I
M
A
T
E
W
A
R
N
I
N
G
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
s
s
i
c
_
r
o
o
m
s
_
l
i
s
t
[
 
'
R
E
L
P
A
T
H
'
 
]
 
=
 
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
E
L
P
A
T
H
'
 
]
;


 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
s
s
i
c
_
r
o
o
m
s
_
l
i
s
t
_
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
c
l
a
s
s
i
c
_
r
o
o
m
s
_
l
i
s
t
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
$
m
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
o
o
k
i
n
g
_
f
o
r
m
_
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
'
 
]
 
=
=
 
'
2
'
)
 
{
 
/
/
 
R
o
o
m
 
t
y
p
e
 
d
r
o
p
d
o
w
n
 
s
e
l
e
c
t
i
o
n
 
f
e
a
t
u
r
e

 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
t
y
p
e
_
d
r
o
p
d
o
w
n
_
l
i
s
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
o
m
t
y
p
e
_
d
r
o
p
d
o
w
n
_
l
i
s
t
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
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
a
m
e
n
d
_
c
o
n
t
r
a
c
t
)
 
{
 
/
/
 
I
f
 
w
e
'
r
e
 
a
m
e
n
d
i
n
g
 
a
 
b
o
o
k
i
n
g
,
 
w
e
 
w
i
l
l
 
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
 
s
w
i
t
c
h
 
b
a
c
k
 
t
o
 
t
h
e
 
'
c
l
a
s
s
i
c
'
 
r
o
o
m
s
 
l
i
s
t
 
s
e
l
e
c
t
i
o
n
 
s
o
 
t
h
a
t
 
t
h
e
 
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
 
a
s
s
i
g
n
 
a
 
u
s
e
r
 
t
o
 
a
 
n
e
w
 
r
o
o
m
.
 
A
s
 
t
h
a
t
'
s
 
t
h
e
 
c
a
s
e
,
 
w
e
'
l
l
 
n
e
e
d
 
t
h
e
 
'
s
e
l
e
c
t
e
d
R
o
o
m
s
'
 
d
i
v
 
b
a
c
k
 
i
n
 
t
h
e
 
t
e
m
p
l
a
t
e
.

 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
t
y
p
e
_
d
r
o
p
d
o
w
n
_
l
i
s
t
[
 
'
A
M
E
N
D
B
O
O
K
I
N
G
_
S
E
L
E
C
T
E
D
R
O
O
M
S
D
I
V
'
 
]
 
=
 
'
<
d
i
v
 
i
d
=
"
s
e
l
e
c
t
e
d
R
o
o
m
s
"
>
<
/
d
i
v
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
t
y
p
e
_
d
r
o
p
d
o
w
n
_
l
i
s
t
_
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
o
m
t
y
p
e
_
d
r
o
p
d
o
w
n
_
l
i
s
t
[
 
'
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
L
E
_
D
E
S
C
'
 
]
 
=
 
$
o
u
t
p
u
t
[
 
'
A
J
A
X
F
O
R
M
_
A
V
A
I
L
A
B
L
E
_
D
E
S
C
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
t
y
p
e
_
d
r
o
p
d
o
w
n
_
l
i
s
t
[
 
'
R
E
L
P
A
T
H
'
 
]
 
=
 
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
E
L
P
A
T
H
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
t
y
p
e
_
d
r
o
p
d
o
w
n
_
l
i
s
t
[
 
'
E
S
T
I
M
A
T
E
W
A
R
N
I
N
G
'
 
]
 
=
 
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
S
T
I
M
A
T
E
W
A
R
N
I
N
G
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
t
y
p
e
_
d
r
o
p
d
o
w
n
_
l
i
s
t
_
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
r
o
o
m
t
y
p
e
_
d
r
o
p
d
o
w
n
_
l
i
s
t
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
$
r
o
o
m
s
_
l
i
s
t
_
a
c
c
o
m
m
o
d
a
t
i
o
n
_
p
a
n
e
l
_
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
i
n
c
l
u
d
e
_
r
o
o
m
_
b
o
o
k
i
n
g
_
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
'
)
)
 
{

 
 
 
 
 
 
 
 
$
r
o
o
m
s
_
l
i
s
t
_
a
c
c
o
m
m
o
d
a
t
i
o
n
_
p
a
n
e
l
 
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
o
m
s
_
l
i
s
t
_
a
c
c
o
m
m
o
d
a
t
i
o
n
_
p
a
n
e
l
[
 
'
B
I
L
L
I
N
G
_
R
O
O
M
T
O
T
A
L
'
 
]
 
=
 
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
I
L
L
I
N
G
_
R
O
O
M
T
O
T
A
L
'
 
]
;

 
 
 
 
 
 
 
 
$
r
o
o
m
s
_
l
i
s
t
_
a
c
c
o
m
m
o
d
a
t
i
o
n
_
p
a
n
e
l
[
 
'
A
C
C
O
M
M
O
D
A
T
I
O
N
_
N
I
G
H
T
S
'
 
]
 
=
 
$
o
u
t
p
u
t
[
 
'
A
C
C
O
M
M
O
D
A
T
I
O
N
_
N
I
G
H
T
S
'
 
]
;

 
 
 
 
 
 
 
 
$
r
o
o
m
s
_
l
i
s
t
_
a
c
c
o
m
m
o
d
a
t
i
o
n
_
p
a
n
e
l
[
 
'
A
C
C
O
M
M
O
D
A
T
I
O
N
_
P
E
R
R
O
O
M
'
 
]
 
=
 
$
o
u
t
p
u
t
[
 
'
A
C
C
O
M
M
O
D
A
T
I
O
N
_
P
E
R
R
O
O
M
'
 
]
;

 
 
 
 
 
 
 
 
$
r
o
o
m
s
_
l
i
s
t
_
a
c
c
o
m
m
o
d
a
t
i
o
n
_
p
a
n
e
l
[
 
'
B
I
L
L
I
N
G
_
T
O
T
A
L
I
N
P
A
R
T
Y
'
 
]
 
=
 
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
I
L
L
I
N
G
_
T
O
T
A
L
I
N
P
A
R
T
Y
'
 
]
;

 
 
 
 
 
 
 
 
$
r
o
o
m
s
_
l
i
s
t
_
a
c
c
o
m
m
o
d
a
t
i
o
n
_
p
a
n
e
l
[
 
'
A
C
C
O
M
M
O
D
A
T
I
O
N
_
T
O
T
A
L
'
 
]
 
=
 
$
o
u
t
p
u
t
[
 
'
A
C
C
O
M
M
O
D
A
T
I
O
N
_
T
O
T
A
L
'
 
]
;


 
 
 
 
 
 
 
 
$
r
o
o
m
s
_
l
i
s
t
_
a
c
c
o
m
m
o
d
a
t
i
o
n
_
p
a
n
e
l
_
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
r
o
o
m
s
_
l
i
s
t
_
a
c
c
o
m
m
o
d
a
t
i
o
n
_
p
a
n
e
l
;

 
 
 
 
}


 
 
 
 
$
b
k
g
-
>
i
n
i
t
R
o
o
m
F
e
a
t
u
r
e
F
i
l
t
e
r
i
n
g
(
)
;

 
 
 
 
$
r
o
o
m
f
e
a
t
u
r
e
s
H
e
a
d
e
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
o
o
m
f
e
a
t
u
r
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

 
 
 
 
i
f
 
(
$
b
k
g
-
>
r
o
o
m
_
f
e
a
t
u
r
e
_
f
i
l
t
e
r
i
n
g
_
e
n
a
b
l
e
d
)
 
{

 
 
 
 
 
 
 
 
$
b
a
s
i
c
_
r
o
o
m
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
r
o
o
m
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
b
a
s
i
c
_
r
o
o
m
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
e
t
_
a
l
l
_
r
o
o
m
s
(
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
)
;


 
 
 
 
 
 
 
 
$
r
o
o
m
f
e
a
t
u
r
e
s
H
e
a
d
e
r
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
O
R
M
_
R
O
O
M
F
E
A
T
U
R
E
_
F
I
L
T
E
R
'
 
=
>
 
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
O
R
M
_
R
O
O
M
F
E
A
T
U
R
E
_
F
I
L
T
E
R
'
 
]
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
b
k
g
-
>
r
o
o
m
_
f
e
a
t
u
r
e
_
c
h
e
c
k
b
o
x
e
s
 
a
s
 
$
f
e
a
t
u
r
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
r
f
 
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
f
[
 
'
I
N
P
U
T
B
O
X
'
 
]
 
=
 
$
f
e
a
t
u
r
e
[
 
'
I
N
P
U
T
B
O
X
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
f
[
 
'
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
f
e
a
t
u
r
e
[
 
'
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
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
f
[
 
'
I
M
A
G
E
'
 
]
 
=
 
$
b
a
s
i
c
_
r
o
o
m
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
a
l
l
_
r
o
o
m
_
f
e
a
t
u
r
e
s
[
 
 
$
f
e
a
t
u
r
e
[
'
I
D
'
]
 
]
[
 
'
t
o
o
l
t
i
p
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
f
e
a
t
u
r
e
s
[
 
]
 
=
 
$
r
f
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
$
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
i
c
i
n
g
 
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
)
 
{

 
 
 
 
 
 
 
 
$
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
i
c
i
n
g
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
_
J
O
M
C
O
M
P
_
A
M
E
N
D
_
O
V
E
R
R
I
D
E
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
T
O
T
A
L
'
 
=
>
 
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
A
M
E
N
D
_
O
V
E
R
R
I
D
E
_
A
C
C
O
M
M
O
D
A
T
I
O
N
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
O
M
C
O
M
P
_
A
M
E
N
D
_
O
V
E
R
R
I
D
E
_
A
C
C
O
M
M
O
D
A
T
I
O
N
_
T
O
T
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
A
M
E
N
D
_
O
V
E
R
R
I
D
E
_
D
E
P
O
S
I
T
'
 
=
>
 
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
A
M
E
N
D
_
O
V
E
R
R
I
D
E
_
D
E
P
O
S
I
T
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
A
M
E
N
D
_
O
V
E
R
R
I
D
E
_
D
E
P
O
S
I
T
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
A
M
E
N
D
_
O
V
E
R
R
I
D
E
_
S
A
V
E
'
 
=
>
 
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
A
M
E
N
D
_
O
V
E
R
R
I
D
E
_
S
A
V
E
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
A
M
E
N
D
_
O
V
E
R
R
I
D
E
_
S
A
V
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
)
;

 
 
 
 
}


 
 
 
 
$
t
a
x
_
t
o
t
a
l
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
s
h
o
w
_
t
a
x
_
i
n
_
t
o
t
a
l
s
_
s
u
m
m
a
r
y
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
t
t
[
 
'
R
O
O
M
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
O
O
M
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
;

 
 
 
 
 
 
 
 
$
t
t
[
 
'
R
O
O
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
_
T
A
X
'
 
]
 
=
 
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
O
O
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
_
T
A
X
'
 
]
;

 
 
 
 
 
 
 
 
$
t
t
[
 
'
R
O
O
M
_
T
O
T
A
L
_
A
C
C
O
M
_
T
A
X
'
 
]
 
=
 
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
O
O
M
_
T
O
T
A
L
_
A
C
C
O
M
_
T
A
X
'
 
]
;

 
 
 
 
 
 
 
 
$
t
t
[
 
'
E
X
T
R
A
S
_
T
A
X
'
 
]
 
=
 
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
X
T
R
A
S
_
T
A
X
'
 
]
;

 
 
 
 
 
 
 
 
$
t
a
x
_
t
o
t
a
l
s
[
 
]
 
=
 
$
t
t
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
T
S
T
R
A
P
_
J
S
_
V
A
R
'
 
]
 
=
 
'
f
a
l
s
e
'
;

 
 
 
 
i
f
 
(
u
s
i
n
g
_
b
o
o
t
s
t
r
a
p
(
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
B
O
O
T
S
T
R
A
P
_
J
S
_
V
A
R
'
 
]
 
=
 
'
t
r
u
e
'
;

 
 
 
 
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
i
n
c
l
u
d
e
_
r
o
o
m
_
b
o
o
k
i
n
g
_
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
'
)
)
 
{

	
	
	
i
f
 
(
$
m
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
o
o
k
i
n
g
_
f
o
r
m
_
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
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
c
l
a
s
s
i
c
_
r
o
o
m
s
_
l
i
s
t
'
,
 
$
c
l
a
s
s
i
c
_
r
o
o
m
s
_
l
i
s
t
_
o
u
t
p
u
t
)
;

	
	
	
}

	
	
	
i
f
 
(
$
m
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
o
o
k
i
n
g
_
f
o
r
m
_
r
o
o
m
s
_
l
i
s
t
_
s
t
y
l
e
'
 
]
 
=
=
 
'
2
'
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
r
o
o
m
t
y
p
e
_
d
r
o
p
d
o
w
n
_
l
i
s
t
'
,
 
$
r
o
o
m
t
y
p
e
_
d
r
o
p
d
o
w
n
_
l
i
s
t
_
o
u
t
p
u
t
)
;

	
	
	
}

	
	
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
c
a
l
e
n
d
a
r
_
m
o
d
a
l
'
,
 
$
c
a
l
e
n
d
a
r
_
m
o
d
a
l
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
o
m
s
_
l
i
s
t
_
a
c
c
o
m
m
o
d
a
t
i
o
n
_
p
a
n
e
l
_
o
u
t
p
u
t
'
,
 
$
r
o
o
m
s
_
l
i
s
t
_
a
c
c
o
m
m
o
d
a
t
i
o
n
_
p
a
n
e
l
_
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
c
o
u
p
o
n
s
'
,
 
$
c
o
u
p
o
n
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
c
o
u
p
o
n
s
_
t
o
t
a
l
s
'
,
 
$
c
o
u
p
o
n
s
_
t
o
t
a
l
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
c
u
s
t
o
m
f
i
e
l
d
s
'
,
 
$
c
u
s
t
o
m
F
i
e
l
d
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
g
u
e
s
t
t
y
p
e
s
'
,
 
$
g
u
e
s
t
T
y
p
e
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
e
x
t
r
a
s
r
o
w
'
,
 
$
e
x
t
r
a
s
H
e
a
d
e
r
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
o
m
f
e
a
t
u
r
e
s
r
o
w
h
e
a
d
e
r
'
,
 
$
r
o
o
m
f
e
a
t
u
r
e
s
H
e
a
d
e
r
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
o
m
f
e
a
t
u
r
e
s
r
o
w
'
,
 
$
r
o
o
m
f
e
a
t
u
r
e
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
n
a
g
e
r
_
p
r
i
c
i
n
g
'
,
 
$
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
i
c
i
n
g
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
a
x
_
t
o
t
a
l
s
'
,
 
$
t
a
x
_
t
o
t
a
l
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
o
n
l
o
a
d
'
,
 
$
t
o
l
o
a
d
)
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
5
0
1
9
'
)
;

	
	
$
m
c
O
u
t
p
u
t
 
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
g
e
t
A
l
l
E
v
e
n
t
P
o
i
n
t
s
D
a
t
a
(
'
0
5
0
1
9
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
m
c
O
u
t
p
u
t
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
m
c
O
u
t
p
u
t
 
a
s
 
$
k
e
y
 
=
>
 
$
v
a
l
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
c
u
s
t
o
m
O
u
t
p
u
t
_
'
.
$
k
e
y
,
 
a
r
r
a
y
(
$
v
a
l
)
)
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
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
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
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
'
,
 
$
t
h
i
r
d
_
p
a
r
t
y
_
e
x
t
r
a
s
)
;

	
	
}

	
	
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
s
h
o
w
E
x
t
r
a
s
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
e
x
t
r
a
_
d
e
t
a
i
l
s
 
=
 
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
E
X
T
R
A
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
 
=
>
 
$
e
x
t
r
a
_
d
e
t
a
i
l
s
)
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
e
x
t
r
a
s
'
,
 
$
e
x
t
r
a
_
d
e
t
a
i
l
s
)
;

	
	
}

	
	
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
 
=
 
a
r
r
a
y
(
'
t
m
p
l
'
 
=
>
 
$
t
m
p
l
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
!
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
i
n
c
l
u
d
e
_
r
o
o
m
_
b
o
o
k
i
n
g
_
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
d
o
b
o
o
k
i
n
g
_
n
o
r
o
o
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

	
	
	
i
f
 
(
(
$
m
r
C
o
n
f
i
g
[
 
'
s
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
'
 
]
 
=
=
 
'
1
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
d
o
b
o
o
k
i
n
g
_
s
r
p
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
d
o
b
o
o
k
i
n
g
.
h
t
m
l
'
)
;

	
	
	
}

	
	
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
D
O
B
O
O
K
I
N
G
_
I
N
_
D
E
T
A
I
L
S
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
b
o
o
k
i
n
g
_
f
o
r
m
 
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

	
	
	
d
e
f
i
n
e
(
'
B
O
O
K
I
N
G
_
F
O
R
M
_
F
O
R
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
D
E
T
A
I
L
S
'
,
 
$
b
o
o
k
i
n
g
_
f
o
r
m
)
;

	
	
}

}


/
*
*

 
*
 
W
h
e
n
 
b
u
i
l
d
i
n
g
 
c
u
s
t
o
m
 
f
i
e
l
d
s
 
t
h
a
t
 
a
r
e
 
r
e
q
u
i
r
e
d
,
 
t
h
i
s
 
c
o
d
e
 
w
i
l
l
 
a
d
d
 
t
o
 
t
h
e
 
"
j
q
u
e
r
y
 
v
a
l
i
d
a
t
o
r
"
 
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
 
t
h
a
t
 
b
y
 
n
e
c
e
s
s
i
t
y
 
i
s
 
b
u
i
l
t
 
i
n
l
i
n
e
 
i
n
 
t
h
e
 
f
o
r
m
.

 
*
/

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
n
e
r
a
t
e
C
u
s
t
o
m
F
i
e
l
d
s
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
(
$
c
u
s
t
o
m
F
i
e
l
d
s
)

{

 
 
 
 
$
s
o
m
e
R
e
q
u
i
r
e
d
 
=
 
f
a
l
s
e
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
u
s
t
o
m
F
i
e
l
d
s
 
a
s
 
$
c
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
c
[
 
'
R
E
Q
U
I
R
E
D
'
 
]
 
!
=
 
'
&
n
b
s
p
;
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
o
m
e
R
e
q
u
i
r
e
d
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
i
f
 
(
!
$
s
o
m
e
R
e
q
u
i
r
e
d
)
 
{

 
 
 
 
 
 
 
 
$
j
s
 
=
 
'
'
;

 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
$
j
s
 
=
 
'
,
 
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
c
u
s
t
o
m
F
i
e
l
d
s
 
a
s
 
$
c
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
[
 
'
R
E
Q
U
I
R
E
D
'
 
]
 
!
=
 
'
&
n
b
s
p
;
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
j
s
 
.
=
 
$
c
[
 
'
F
I
E
L
D
N
A
M
E
'
 
]
.
'
:
 
{

	
	
	
	
	
	
m
i
n
l
e
n
g
t
h
:
 
1
,

	
	
	
	
	
	
r
e
q
u
i
r
e
d
 
:
 
t
r
u
e

	
	
	
	
	
}
,
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
r
t
r
i
m
(
$
j
s
,
 
'
,
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
 
$
j
s
;

}

